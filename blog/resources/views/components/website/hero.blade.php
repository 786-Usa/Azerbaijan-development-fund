@props([
    'backgroundImage',
    'title',
    'description' => null,  // Make optional with default null
    'buttonLink' => null,   // Make optional
    'buttonText' => null    // Make optional
])

<section class="hero-section" style="background-image: url('{{ $backgroundImage }}')">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content text-white animate-fade-in">
            <h1 class="display-5">{{ $title }}</h1>
            
            @if($description)
                <p class="lead mt-3 mb-4">{{ $description }}</p>
            @endif
            
            @if($buttonLink && $buttonText)
                <a href="{{ $buttonLink }}" class="btn btn-outline-light px-4 py-2">{{ $buttonText }}</a>
            @endif
        </div>
    </div>
</section>

@once
<style>
    body{
  font-family: "Ubuntu", sans-serif;
}
 .hero-section {
  position: relative;
  background-image: url('/images/main-picture.jpg'); /* Change path if needed */
  background-size: cover;
  background-position: center;
  height: 100vh;
  display: flex;
  align-items: center;
  padding: 0 2rem;
}

.hero-overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* Shadow overlay */
  z-index: 1;
}

.hero-content {
  position: relative;
  z-index: 2;
  color: #fff;
  /* max-width: 700px; */
  padding: 2rem;
  text-align: left;  /* ⬅️ LEFT aligned */
}

.hero-content h1 {
  font-size: 2.5rem;
  font-weight: 300;
    line-height: 80px;
  margin-bottom: 1rem;
  color: #fff;
  font-size: 80px; /* Adjusted for larger text */
}

.hero-content p {
  /* font-size: 1.2rem; */
  color: rgba(255, 255, 255, 0.95);
  margin-bottom: 2rem;
  max-width: 600px;
  font-size: 18px; /* Adjusted for better readability */
  line-height: 28px;
}

.hero-btn {
  background-color: #516beb;
  color: #fff;
  padding: 0.75rem 1.5rem;
  border-radius: 4px;
  text-decoration: none;
  font-weight: 500;
  display: inline-block;
  transition: background-color 0.3s ease;
}

.hero-btn:hover {
  background-color: #3b52d6;
}
@media (max-width: 1200px) {
  .hero-content h1 {
    font-size: 60px;
    line-height: 70px;
  }
}

@media (max-width: 992px) {
  .hero-section {
    padding: 0 1.5rem;
  }

  .hero-content h1 {
    font-size: 48px;
    line-height: 60px;
  }

  .hero-content p {
    font-size: 16px;
    line-height: 26px;
  }

  .btn {
    padding: 0.6rem 1.2rem;
    font-size: 16px;
  }
}

@media (max-width: 768px) {
  .hero-content {
    padding: 1rem;
  }

  .hero-content h1 {
    font-size: 36px;
    line-height: 48px;
  }

  .hero-content p {
    font-size: 15px;
    line-height: 24px;
  }
}

@media (max-width: 576px) {
  .hero-section {
    height: auto;
    padding: 3rem 1rem;
  }

  .hero-content {
    padding: 1rem 0;
  }

  .hero-content h1 {
    font-size: 28px;
    line-height: 40px;
  }

  .hero-content p {
    font-size: 14px;
    line-height: 22px;
  }

  .btn {
    width: 100%;
    text-align: center;
    padding: 0.6rem;
  }
}


/* Subtle fade-in animation */
@keyframes fadeInUp {
  0% {
    opacity: 0;
    transform: translateY(40px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-fade-in {
  animation: fadeInUp 1s ease-out both;
}

/* Responsive Enhancements */
@media (max-width: 1200px) {
  .hero-content h1 {
    font-size: 60px;
    line-height: 70px;
  }
}

@media (max-width: 992px) {
  .hero-content h1 {
    font-size: 48px;
    line-height: 60px;
  }

  .hero-content p {
    font-size: 16px;
    line-height: 26px;
  }

  .btn {
    padding: 0.6rem 1.2rem;
    font-size: 16px;
  }
}

@media (max-width: 768px) {
  .hero-content h1 {
    font-size: 36px;
    line-height: 48px;
  }

  .hero-content p {
    font-size: 15px;
    line-height: 24px;
  }
}

@media (max-width: 576px) {
  .hero-section {
    height: auto;
    padding: 3rem 1rem;
  }

  .hero-content h1 {
    font-size: 28px;
    line-height: 40px;
  }

  .hero-content p {
    font-size: 14px;
    line-height: 22px;
  }

  .btn {
    width: 100%;
    text-align: center;
    padding: 0.6rem;
  }
}

</style>
@endonce