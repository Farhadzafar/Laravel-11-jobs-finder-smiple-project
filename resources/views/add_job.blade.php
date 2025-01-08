<x-layout>
    <section class="bg-white">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900">Add a new Job</h2>
        <form action="{{ route('jobs.store') }}" method="POST">
         @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Job Title</label>
                    <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type Job title..." required="">
                </div>
                <div class="sm:col-span-2">
                    <label for="location" class="block mb-2 text-sm font-medium text-gray-900">Job Location</label>
                    <input type="text" name="location" id="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Job location..." required="">
                </div>
                <div class="w-full">
                    <label for="company" class="block mb-2 text-sm font-medium text-gray-900">Company</label>
                    <input type="text" name="company" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Job company" required="">
                </div>
                <div class="w-full">
                    <label for="salary" class="block mb-2 text-sm font-medium text-gray-900">salary</label>
                    <input type="number" name="salary" id="salary" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="$2999..." required="">
                </div>
                <div>
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                    <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                        <option value="">Select a category</option>
                        <option value="Software Development">Software Development</option>
                        <option value="Design">Design</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Sales">Sales</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div>
                    <label for="job-type" class="block mb-2 text-sm font-medium text-gray-900">Jab Type</label>
                    <select
                        name="job_type"
                        required
                        id="job-type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                    >
                        <option value="">Select a job type</option>
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Remote">Remote</option>
                        <option value="Contract">Contract</option>
                        <option value="Freelance">Freelance</option>
                    </select>
                </div> 
                <div class="sm:col-span-2">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                    <textarea id="description" name="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500" placeholder="Your description here"></textarea>
                </div>
            </div>
            <div class="mt-6 sm:mt-8 w-full flex items-center justify-between">
                <div class="w-[85%] sm:w-3/4">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Job Image</label>
                    <input type="file" id="file" name="image" required class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-1.5
                    file:py-1 file:px-2
                    file:rounded-lg file:border-0
                    file:text-sm file:font-semibold
                    file:bg-blue-600 file:text-white
                    hover:file:bg-blue-700
                    file:disabled:opacity-50 file:disabled:pointer-events-none
                   
                   
                   
                    ">
                </div>
                <!-- buttons start -->
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-stone-50 bg-gray-800 rounded-lg focus:ring-4 focus:ring-gray-200 hover:bg-gray-800">
                Add product
                </button>
            </div>
        </form>
    </div>
    </section>
</x-layout>