<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="container">
                        <form action="{{ route('project.update', $project->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Project Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name', $project->title) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Project Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $project->description) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="deadline">Start Date</label>
                                <input type="date" class="form-control" id="deadline" name="deadline"
                                    value="{{ old('start_date', $project->start_date) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="deadline">Due Date</label>
                                <input type="date" class="form-control" id="deadline" name="deadline"
                                    value="{{ old('due_date', $project->due_date) }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Project</button>
                            @error('content')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror

                            // TODO: error input
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>

</x-app-layout>
