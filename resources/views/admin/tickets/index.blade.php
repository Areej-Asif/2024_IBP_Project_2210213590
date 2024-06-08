@extends('layouts.admin')
@section('content')
    @can('ticket_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.tickets.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.ticket.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card card-preview">
        <div class="card-header">
            {{ trans('cruds.ticket.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-inner">
            <div class="table-responsive" >

            <table class="table table-bordered table-striped table-hover datatable-init-export">
                <thead>
                    <tr>
                        <th>#</th>
                        {{-- <th>{{ trans('cruds.ticket.fields.id') }}</th> --}}
                        <th>
                            {{ trans('cruds.ticket.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.ticket.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.ticket.fields.priority') }}
                        </th>
                        <th>
                            {{ trans('cruds.ticket.fields.category') }}
                        </th>
                        <th>
                            {{ trans('cruds.ticket.fields.author_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.ticket.fields.author_email') }}
                        </th>
                        @if (!auth()->user()->isUser())
                            <th>
                                {{ trans('Assigned to Department') }}
                            </th>
                        @endif
                        <th>
                            {{ trans('global.actions') }}
                        </th>
                    </thead>
                    <tbody>
                        @forelse ($tickets as $ticket)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $ticket->title }}</td>
                                <td>{{ $ticket->status->name }}</td>
                                <td>{{ $ticket->priority->name }}</td>
                                <td>{{ $ticket->category->name }}</td>
                                <td>{{ optional($ticket->author)->name }}</td>
                                <td>{{ optional($ticket->author)->email }}</td>
                                @if (isset($ticket->assignTo))
                                <td>{{ $ticket->assignTo->name }}</td>@else<td>Not Assigned</td>
                                @endif
                                <td>
                                    <form action="{{ route('admin.tickets.destroy', $ticket->id) }}" method="post" id="delete_form">
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.tickets.show', $ticket->id) }}">View</a>
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.tickets.edit', $ticket->id) }}">Edit</a>
                                    <a class="btn btn-xs btn-danger"
                                        href="#" onclick="$('#delete_form').submit()">Delete</a>
                                </td>
                            </tr>
                        @empty
                            No Tickets Founds
                        @endforelse
                    </tbody>
            </table>
            </div>
        </div>
    </div>
@endsection
