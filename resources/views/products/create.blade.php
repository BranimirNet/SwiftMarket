<x-app-layout>

<div class="py-12 bg-gray-100 min-h-screen">

    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

        <div class="bg-white shadow rounded-lg p-8">

            <h1 class="text-3xl font-bold mb-6">
                Add New Product
            </h1>


            <form method="POST" 
                  action="{{ route('products.store') }}" 
                  enctype="multipart/form-data">

                @csrf


                <div class="mb-4">

                    <label class="block font-medium">
                        Name
                    </label>

                    <input 
                    type="text"
                    name="name"
                    class="border rounded w-full p-2">

                </div>



                <div class="mb-4">

                    <label class="block font-medium">
                        Description
                    </label>

                    <textarea 
                    name="description"
                    class="border rounded w-full p-2"></textarea>

                </div>



                <div class="mb-4">

                    <label class="block font-medium">
                        Price
                    </label>

                    <input 
                    type="number"
                    step="0.01"
                    name="price"
                    class="border rounded w-full p-2">

                </div>



                <div class="mb-4">

                    <label class="block font-medium">
                        Stock
                    </label>

                    <input 
                    type="number"
                    name="stock"
                    class="border rounded w-full p-2">

                </div>



                <div class="mb-4">

                    <label class="block font-medium">
                        Category ID
                    </label>

                    <input 
                    type="number"
                    name="category_id"
                    class="border rounded w-full p-2">

                </div>



                <div class="mb-4">

                    <label class="block font-medium">
                        Product Image
                    </label>

                    <input 
                    type="file"
                    name="image"
                    class="border rounded w-full p-2">

                </div>



                <button 
                class="bg-black text-white px-6 py-3 rounded">

                    Create Product

                </button>


            </form>

        </div>

    </div>

</div>

</x-app-layout>