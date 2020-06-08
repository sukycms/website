<aside {{ $attributes->merge(['class' => 'sidebar text-gray-800 pt-8']) }}>

    <ul>
        <li class="my-2">
            <a href="{{ route('admin.dashboard') }}" class="w-full block py-2 px-2 rounded-lg hover:bg-gray-400 {{ Request::routeIs('admin.dashboard') ? 'bg-gray-400' : '' }}"><i class="fas fa-home fa-fw mr-2"></i> Dashboard</a>
        </li>
        <li class="my-2">
            <a href="{{ route('admin.newsletter') }}" class="w-full block py-2 px-2 rounded-lg hover:bg-gray-400 {{ Request::routeIs('admin.newsletter') ? 'bg-gray-400' : '' }}"><i class="fas fa-envelope fa-fw mr-2"></i> Newsletter</a>
        </li>
        <li class="my-2">
            <a href="{{ route('admin.blog.index') }}" class="w-full block py-2 px-2 rounded-lg hover:bg-gray-400 {{ Request::is('admin/blog*') ? 'bg-gray-400' : '' }}"><i class="fas fa-file-alt fa-fw mr-2"></i> Blog</a>
        </li>
        <li class="my-2">
            <a href="{{ route('admin.logout') }}" class="w-full block py-2 px-2 rounded-lg hover:bg-gray-400"><i class="fas fa-sign-out-alt fa-fw mr-2"></i> Logout</a>
        </li>
    </ul>

</aside>
