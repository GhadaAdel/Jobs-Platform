<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

<form method="POST" action="/register">
    @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
      <div class="sm:col-span-4">
      <x-form-label for="title">Name</x-form-label>
        <div class="mt-2">
          <x-form-input type="text" name="name" id="name"></x-form-input>
        </div>
        </div>

        <div class="sm:col-span-4">
        <x-form-label for="salary">Email</x-form-label>
          <div class="mt-2">
          <x-form-input type="email" name="email" id="email"></x-form-input>
          </div>
        </div>

        <div class="sm:col-span-4">
      <x-form-label for="password">Password</x-form-label>
        <div class="mt-2">
          <x-form-input type="password" name="password" id="password"></x-form-input>
        </div>
        </div>

        <div class="sm:col-span-4">
      <x-form-label for="password_confirmation">Password Confirmation</x-form-label>
        <div class="mt-2">
          <x-form-input type="password" name="password_confirmation" id="password_confirmation"></x-form-input>
        </div>
        </div>
        
      </div>
    </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
    <x-form-button>Save</x-form-button>
  </div>
</form>
</x-layout>
