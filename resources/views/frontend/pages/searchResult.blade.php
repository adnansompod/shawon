@extends('frontend.app')

@section('title')
    Search Result
@endsection
@section('body')
    <section class="blog-post-area section-margin category">
        <div class="container">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-lg-4 sidebar-widgets">
                    <div class="widget-wrap">
                        <div class="single-sidebar-widget post-category-widget">
                            <h4 class="single-sidebar-widget__title">Department</h4>
                            <ul class="cat-list mt-20">
                                @foreach($departments as $department)
                                    <li>
                                        <a href="{{route('show.departmentDetails',$department->id)}}" class="d-flex justify-content-between">
                                            <p>{{$department->name}}</p>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Sidebar -->

                <!-- Blog Posts -->
                <div class="col-lg-8">
                    <div class="mb-5">
                        <h4>Suggested Departments for <span style="color: blue;">"{{$query}}"</span></h4>
                    </div>
                    <div class="row">
                        @if($results->count())
                        @foreach($results as $result)
                            <div class="col-md-4">
                                <div class="single-recent-blog-post card-view">
                                        <div class="details mt-20">
                                            <h3 class="p-3">{{$result->name}}</h3>
                                        </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @else
                        <p class="ml-2">No results found.</p>
                    @endif
                </div>
                <!-- End Blog Posts -->
            </div>
        </div>
    </section>

@endsection
