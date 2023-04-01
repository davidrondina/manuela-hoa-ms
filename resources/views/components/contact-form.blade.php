<form action="" method="post">
    @csrf
    <div class="w-full sm:flex space-x-0 sm:space-x-2">
        <div class="w-full sm:w-1/2">
            <label class="mb-3 block">
                <span class="block">First Name (Required)</span>
                <input type="text" name="first-name" id="" class="w-full p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-theme-green"" placeholder="Your first name here">
            </label>
        </div>

        <div class="w-full sm:w-1/2">
            <label class="mb-3 block">
                <span class="block">Last Name (Required)</span>
                <input type="text" name="last-name" id="" class="w-full p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-theme-green"" placeholder="Your last name here">
            </label>
        </div>
    </div>

    <label class="mb-3 block">
        <span class="block">Email (Required)</span>
        <input type="email" name="email" id="" class="w-full p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-theme-green"" placeholder="E.g. name@email.com" required>
    </label>

    <label class="mb-3 block">
        <textarea name="message" id="" class="w-full h-[150px] max-h-[150px] p-2 mb-5 resize-none border border-gray-300 focus:outline-none focus:ring-0 focus:border-theme-green"" placeholder="Write something here..." required></textarea>
    </label>

    <button type="submit" class="w-full sm:w-auto cta-btn focus:ring-4 focus:ring-blue-300 shadow-md">Send message</button>
</form>
