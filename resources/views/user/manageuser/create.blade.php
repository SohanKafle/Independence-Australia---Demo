@extends('layouts.user')
@section('content')

<div class="container mx-auto px-4 py-8">
  <div class="bg-white p-6 sm:p-8 shadow-lg rounded-lg max-w-full mx-auto">
    <h1 class="text-lg sm:text-3xl font-bold text-[#00718f] mb-6 pt-8">Create Account</h1>
    <form action="{{route('user.manageuser.store')}}" method="POST" class="space-y-6">
      @csrf
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- First Name -->
        <div>
          <label for="name" class="block text-gray-700 font-medium mb-2">First Name</label>
          <input type="text" id="first_name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="First Name" value="{{ old('name') }}" required>
          @error('name')
          <span class="text-red-600 text-sm">{{ $message }}</span>
          @enderror
        </div>
        <!-- Last Name -->
        <div>
          <label for="last_name" class="block text-gray-700 font-medium mb-2">Last Name</label>
          <input type="text" id="last_name" name="last_name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Last Name" value="{{ old('last_name') }}" required>
          @error('last_name')
          <span class="text-red-600 text-sm">{{ $message }}</span>
          @enderror
        </div>
      </div>

  
  
      <!-- Email -->
      <div>
        <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
        <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your email" value="{{ old('email') }}" required>
        @error('email')
        <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
      </div>

      <!-- Password -->
      <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
        <div>
          <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
          <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Password" required>
          @error('password')
          <span class="text-red-600 text-sm">{{ $message }}</span>
          @enderror
        </div>
        <div>
          <label for="password_confirmation" class="block text-gray-700 font-medium mb-2">Confirm Password</label>
          <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Confirm Password" required>
        </div>
      </div>

      <!-- Address Information -->
      <h2 class="text-lg sm:text-3xl font-bold text-[#00718f] mt-6">Address Information</h2>
      <div>
        <label for="address" class="block text-gray-700 font-medium mb-2">Address</label>
        <input type="text" id="address" name="address" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="e.g. Gaindakot-01, Nawalpur" value="{{ old('address') }}" required>
      </div>
      <div>
        <label for="phone_number" class="block text-gray-700 font-medium mb-2">Phone Number</label>
        <input type="tel" id="phone_number" name="phone_number" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="980 123 4351" value="{{ old('phone_number') }}" required>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="py-[10px] px-[20px] bg-[#00718f] text-white font-bold rounded-[24px] border-2 border-[#00718f] hover:bg-[#ffffff] hover:text-[#00718f] transition">
        Create Account
      </button>
    </form>
  </div>
</div>

@endsection