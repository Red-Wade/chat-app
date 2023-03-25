<!-- eslint-disable vue/multi-word-component-names -->
<script setup>
import Checkbox from '@/Components/Checkbox.vue'
import GuestLayout from '@/Layouts/GuestLayout.vue'
import InputError from '@/Components/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import TextInput from '@/Components/TextInput.vue'
import { Head, Link, useForm } from '@inertiajs/vue3'

defineProps({
  canResetPassword: Boolean,
  status: {
    type: String,
    default: null
  }
})

const form = useForm({
  username: '',
  password: '',
  remember: false
})

const submit = () => {
  // eslint-disable-next-line no-undef
  form.post(route('login.authenticate'), {
    onFinish: () => form.reset('password')
  })
}
</script>

<template>
  <div class="relative flex justify-center items-center min-h-screen bg-center bg-gray-100 dark:bg-gray-900">
    <GuestLayout>
      <Head title="Log in" />
      <div
        v-if="status"
        class="mb-4 font-medium text-sm text-green-600"
      >
        {{ status }}
      </div>
      <form @submit.prevent="submit">
        <InputError
          :message="$page.props.errors.username"
          class="text-center"
        />
        <div>
          <InputLabel
            for="username"
            value="Username"
          />

          <TextInput
            id="username"
            v-model="form.username"
            type="text"
            class="mt-1 block w-full"
            autofocus
            autocomplete="username"
          />

          <InputError
            class="mt-2"
            :message="form.errors.email"
          />
        </div>

        <div class="mt-4">
          <InputLabel
            for="password"
            value="Password"
          />

          <TextInput
            id="password"
            v-model="form.password"
            type="password"
            class="mt-1 block w-full"
            required
            autocomplete="current-password"
          />

          <InputError
            class="mt-2"
            :message="form.errors.password"
          />
        </div>

        <div class="block mt-4">
          <label class="flex items-center">
            <Checkbox
              v-model:checked="form.remember"
              name="remember"
            />
            <span class="text-gray-600 dark:text-gray-400 text-sm">Remember me</span>
          </label>
        </div>

        <div class="flex items-center justify-end mt-4">
          <Link
            v-if="canResetPassword"
            :href="route('password.request')"
            class="text-gray-600 dark:text-gray-400 text-sm"
          >
            Forgot your password?
          </Link>

          <PrimaryButton
            class="ml-4"
            :class="{ 'opacity-25': form.processing }"
            :disabled="form.processing"
          >
            Log in
          </PrimaryButton>
        </div>
      </form>
    </GuestLayout>
  </div>
</template>
