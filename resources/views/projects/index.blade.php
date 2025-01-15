<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Start At</th>
                                    <th>Due At</th>
                                    <th>Finish At</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                    <tr>
                                        <td>{{ $project->id }}</td>
                                        <td>{{ $project->title }}</td>
                                        <td>{{ $project->description }}</td>
                                        <td>{{ $project->start_date }}</td>
                                        <td>{{ $project->due_date }}</td>
                                        <td>{{ $project->finish_date }}</td>
                                        <td>
                                            <div class="join join-vertical lg:join-horizontal">
                                                <a href="{{ route('project.show', $project->id) }}" role="button" class="btn btn-info join-item btn-xs">View</a>
                                                <a href="{{ route('project.edit', $project->id) }}" role="button" class="btn btn-warning join-item btn-xs">Edit</a>
                                                <form action="{{ route('project.destroy', $project->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-error join-item btn-xs">Delete</a>
                                                    @method('DELETE')
                                                </form>
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

</x-app-layout>
