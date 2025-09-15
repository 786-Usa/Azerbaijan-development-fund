<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Page;
use Illuminate\Support\Collection;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = strtolower($request->input('q'));

        // 1. Blog posts (DB)
        $posts = Post::where('title', 'LIKE', "%{$query}%")
            ->orWhere('content', 'LIKE', "%{$query}%")
            ->select('id', 'title', 'content as summary')
            ->get()
            ->map(function ($item) {
                return [
                    'type' => 'post',
                    'title' => $item->title,
                    'summary' => $item->summary,
                    'url' => route('blog.show', $item->id),
                ];
            });

        // 2. Dynamic pages (DB)
        $pages = Page::where('title', 'LIKE', "%{$query}%")
            ->orWhere('summary', 'LIKE', "%{$query}%")
            ->select('id', 'title', 'summary', 'slug')
            ->get()
            ->map(function ($item) {
                return [
                    'type' => 'page',
                    'title' => $item->title,
                    'summary' => $item->summary,
                    'url' => url('/' . $item->slug),
                ];
            });

        // 3. Static blade-only pages (manual list)
        $staticPages = collect([
            ['title' => 'Investor Relation', 'summary' => 'Investor relations information', 'url' => route('investor.relation')],
            ['title' => 'Investment Banking', 'summary' => 'What we do in investment banking', 'url' => route('investment.banking')],
            ['title' => 'FICC and Equities', 'summary' => 'Fixed income, currency and commodities', 'url' => route('ficc.equities')],
            ['title' => 'Enterprise Partnerships', 'summary' => 'Business and enterprise partnerships', 'url' => route('enterprise.partnerships')],
            ['title' => 'Transaction Banking', 'summary' => 'Transaction banking services', 'url' => route('transaction.banking')],
            ['title' => 'Research', 'summary' => 'Research and insights', 'url' => route('research')],
            ['title' => 'Institute', 'summary' => 'Educational and institute info', 'url' => route('institute')],
            ['title' => 'Our People & Leadership', 'summary' => 'Leadership team', 'url' => route('our.people.and.leadership')],
            ['title' => 'Firm History', 'summary' => 'Our company history', 'url' => route('our.firm.history')],
            ['title' => 'Community Impact', 'summary' => 'CSR and community projects', 'url' => route('our.firm.community.impact')],
            ['title' => 'Sustainable Finance', 'summary' => 'Our sustainable finance initiatives', 'url' => route('our.firm.sustainable.finance')],
            ['title' => 'Vendor Program', 'summary' => 'Our vendor program', 'url' => route('our.firm.our.vendor.program')],
            ['title' => 'Partnership', 'summary' => 'Firm partnerships', 'url' => route('our.firm.partnership')],
        ])->filter(function ($page) use ($query) {
            return str_contains(strtolower($page['title']), $query) ||
                   str_contains(strtolower($page['summary']), $query);
        })->map(function ($page) {
            return [
                'type' => 'static',
                'title' => $page['title'],
                'summary' => $page['summary'],
                'url' => $page['url'],
            ];
        });

        // Merge all 3
        $results = collect()->merge($posts)->merge($pages)->merge($staticPages);

        return view('search.results', compact('results', 'query'));
    }
}
