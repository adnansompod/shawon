@extends('frontend.app')

@section('title')
    Department
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
                        <h2>Doctors</h2>
                    </div>
                    <div class="row">
                        <!-- Blog Card -->
                        @foreach($doctors as $doctor)
                            <div class="col-md-4">
                                <div class="single-recent-blog-post card-view">
                                    <a href="{{route('show.doctorDetails',$doctor->id)}}">
                                        <div class="thumb">
                                            <img class="fixed-card-image rounded-0" src="{{ asset('storage/' . $doctor->image) }}" alt="Doctor Image">
                                            <ul class="thumb-info">
                                                <li><i class="ti-user"></i>{{$doctor->name ?? ""}}</li>
                                            </ul>
                                        </div>
                                        <div class="details mt-20">
                                            <h3>{{ $doctor->department->name ?? 'No Department Assigned' }}</h3>
                                            <p>{{$doctor->hospital_name}}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        <!-- End Blog Card -->
                    </div>
                </div>
                <!-- End Blog Posts -->
            </div>
        </div>
    </section>

@endsection
