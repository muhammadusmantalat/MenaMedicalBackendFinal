@extends('admin.layout.app')
@section('title', 'index')
@section('content')
    <div class="main-content" style="min-height: 562px;">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-12">
                                    <h4>Key Features of Advanced</h4>
                                </div>
                            </div>
                            <div class="card-body table-striped table-bordered table-responsive">
                                {{-- <a class="btn btn-success mb-3" href="{{ route('DataAnalysisServiceTwoCreate') }}">Add
                                    Content</a> --}}

                                <table class="responsive table" id="table-1">
                                    <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            
                                            <th>Feature Title</th>
                                            <th>Features</th>
                                            
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($DataAnalysisServiceTwos as $DataAnalysisServiceTwo)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                               
                                                <td>
                                                    @if(!empty($DataAnalysisServiceTwo->feature_title ))
                                                    {{ $DataAnalysisServiceTwo->feature_title }}
                                                    @else
                                                    <span class="text-muted">No Feature Title</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if(!empty($DataAnalysisServiceTwo->feature)) 
                                                    <ul>
                                                        @foreach (explode("\n", $DataAnalysisServiceTwo->feature) as $line)
                                                            @if (!empty(trim($line)))
                                                                <li>{{ $line }}</li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                    @else
                                                    <span class="text-muted">No Feature</span>
                                                    @endif
                                                </td>
                                                
                                                
                                               

                                                <td>
                                                    <div class="d-flex gap-4">
                                                        <a href="{{ route('DataAnalysisServiceTwoEdit', $DataAnalysisServiceTwo->id) }}"
                                                            class="btn btn-primary" style="margin-left: 10px">
                                                            <span class="fas fa-edit"></span> </a>
                                                        {{-- <form
                                                            action="{{ route('DataAnalysisServiceTwoDestroy', $DataAnalysisServiceTwo->id) }}"
                                                            method="POST" style="display:inline-block; margin-left: 10px">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-flat show_confirm" data-toggle="tooltip">
                                                                <span class="fas fa-trash-alt"></span> <!-- Delete icon -->
                                                            </button>
                                                        </form> --}}
                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>



@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this record?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
@endsection
