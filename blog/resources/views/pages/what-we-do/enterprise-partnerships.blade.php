@extends('app')

@section('content')
    <div class="container py-5 mx-3">
        <div class="row ">
            <h1 class="fw-bold fs-1">Enterprise Partnerships</h1>
            <p class="fw-light fs-3 text-gray">We collaborate with leading organizations to deliver innovative financial
                solutions.</p>
        </div>
    </div>

    <x-website.image-content imageUrl="https://www.goldmansachs.com/images/careers/GS_VM_Photo_SH_NYC4_00337_1x1.jpg"
        imageAlt="Internship Program" subtitle="" title="Embedded financial products, powered by Goldman Sachs"
        content="We make it easy to offer a range of financial products powered by an API-first platform with the backing of Goldman Sachs' 150+ years of financial expertise." />

    <x-website.image-content imageUrl="/images/corporate-Dubai-42-scaled.jpg" imageAlt="Career Development" subtitle=""
        title="A seamless experience"
        content="We offer a customized deployment approach while providing a modern, agile technology stack, all supported by our long history of risk management and regulatory knowledge."
        reverse="true" />
@endsection
