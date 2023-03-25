<form action="" method="post">
    @csrf
    <div class="w-full sm:flex space-x-0 sm:space-x-2">
        <div class="w-full sm:w-1/2">
            <label class="mb-3 block">
                <span class="block">First Name (Required)</span>
                <input type="text" name="first-name" id="" class="w-full p-2 border border-gray-300" placeholder="Your first name here">
            </label>
        </div>

        <div class="w-full sm:w-1/2">
            <label class="mb-3 block">
                <span class="block">Last Name (Required)</span>
                <input type="text" name="last-name" id="" class="w-full p-2 border border-gray-300" placeholder="Your last name here">
            </label>
        </div>
    </div>
    <!-- <label class="mb-3 block">
        <span class="after:content-['(Required)'] after:text-base after:ml-1 block">Name</span>
        <input type="text" name="" id="" class="w-full p-2 rounded-lg" placeholder="E.g. Juan Dela Cruz" required>
    </label> -->

    <label class="mb-3 block">
        <span class="block">Email (Required)</span>
        <input type="email" name="email" id="" class="w-full p-2 border border-gray-300" placeholder="E.g. name@email.com" required>
    </label>

    <label class="mb-3 block">
        <span class="block">Message (Required)</span>
        <textarea name="message" id="" class="w-full h-[150px] max-h-[150px] p-2 mb-5 resize-none border border-gray-300" placeholder="Write something here..." required></textarea>
    </label>

    <button type="submit" class="w-full sm:w-auto bg-theme-green focus:ring-4 focus:ring-blue-300 text-white px-5 py-2.5 font-semibold shadow-md">Submit</button>
</form>
