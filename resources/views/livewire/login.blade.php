<div class="min-h-screen flex items-center justify-center bg-orange-50">
	<div class="w-full max-w-md px-4">
		<form wire:submit.prevent="login" class="bg-white border border-orange-100 shadow rounded-lg p-6">
			<div class="mb-4 text-center">
				<h2 class="text-xl font-semibold text-orange-700">Welcome back</h2>
				<p class="text-sm text-orange-600">Sign in to your account</p>
			</div>

			<div class="space-y-4">
				<div>
					<label class="block text-orange-700 text-sm mb-1">Email</label>
					<input wire:model.defer="email" type="email" placeholder="you@example.com" class="w-full border border-orange-200 rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-300">
					@error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
				</div>

				<div>
					<label class="block text-orange-700 text-sm mb-1">Password</label>
					<input wire:model.defer="password" type="password" placeholder="Password" class="w-full border border-orange-200 rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-300">
					@error('password') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
				</div>

				<div class="flex items-center justify-between">
					<label class="flex items-center text-sm text-orange-700">
						<input wire:model="remember" id="remember" type="checkbox" class="mr-2 h-4 w-4 text-orange-600 rounded border-orange-200"> Remember me
					</label>
					<a href="#" class="text-sm text-orange-600 hover:underline">Forgot?</a>
				</div>

				<div>
					<button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-medium py-2 rounded-md">Sign In</button>
				</div>
			</div>

			@if ($errors->any())
				<div class="mt-4 text-sm text-red-600">
					<ul class="list-disc list-inside">
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
		</form>
	</div>
</div>
