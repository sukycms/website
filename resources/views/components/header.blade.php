<header class="header py-8">
    <div class="container mx-auto">
        <div class="flex flex-row justify-between items-center">
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="">
            </a>

            <nav>
                <ul class="flex flex-row">
                    <x-header.link :url="route('blog.index')" _target="blank" title="Blog">
                        Blog
                    </x-header.link>
                    <x-header.link :url="config('sukycms.social.facebook')" _target="blank" title="Facebook">
                        <i class="fab fa-facebook-f fa-fw"></i>
                    </x-header.link>
                    <x-header.link :url="config('sukycms.social.twitter')" _target="blank" title="Twitter">
                        <i class="fab fa-twitter fa-fw"></i>
                    </x-header.link>
                    <x-header.link :url="config('sukycms.social.github')" _target="blank" title="Github">
                        <i class="fab fa-github fa-fw"></i>
                    </x-header.link>
                </ul>
            </nav>
        </div>
    </div>
</header>
