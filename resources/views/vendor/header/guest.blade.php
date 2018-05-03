<!-- Header start -->
    <header>
        <!-- Top Header start -->
        <div class="header-top">
            <div class="container">
                <div class="row no-margin">
                    <div class="col s12 m6">
                        <div class="header-top-menu">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-phone"></i>
                                        +998(99) 804-02-26
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-envelope"></i>
                                        nanotexnolagiya@mail.ru
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="search-wrapper right">
                            <form action="/search" id="searchForm" method="GET">
                                <input type="text" name="s" value="{{ (isset($_GET['s']) ? $_GET['s'] : '') }}" placeholder="Search..." />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top header end -->

        <!-- Header start -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <div class="logo">
                            <h2>Logo</h2>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class="header-menu">
                            <ul>
                                <li><a href="{{ url('/') }}" class="flow-text">Home</a></li>
                                @foreach($categories as $category)
                                <li><a href="{{ route('getCategory', ['id' => $category->id]) }}" class="flow-text">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header end -->
    </header>