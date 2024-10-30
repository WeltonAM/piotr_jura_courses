<template>
    <UCard v-if="!success">
        <template #header>
            Sign-in to Finance Tracker
        </template>

        <form @submit.prevent="handleLogin">
            <UFormGroup 
                label="Email" 
                name="email" 
                :required="true" 
                help="You will receive an email with the confirmation link" 
                class="mb-4"
            >
                <UInput type="email" placeholder="Email" required v-model="email" />
            </UFormGroup>

            <UButton type="submit" color="black" variant="solid" :loading="pending" :disabled="pending">
                Sign-in
            </UButton>
        </form>
    </UCard>

    <UCard v-else>
        <template #header>
            The email has been sent
        </template>

        <div class="text-center">
            <p class="mb-4">We have sent you an email to <strong>{{ email }}</strong> with a confirmation link.</p>

            <p>
                <strong>Important:</strong> The link will expire in <strong>5 minutes</strong>.
            </p>
        </div>
    </UCard>
</template>

<script setup>
const success = ref(false)
const email = ref('')
const pending = ref(false)
const toast = useToast()
const supabase = useSupabaseClient()

useRedirectIfAuthenticated()

const handleLogin = async () => {
    pending.value = true

    try {
        const { error } = await supabase.auth.signInWithOtp({
            email: email.value,
            options: {
                emailRedirectTo: `http://localhost:3000/confirm`,
            }
        })

        if (error) {
            toast.add({
                title: 'Error authenticating',
                icon: 'i-heroicons-exclamation-circle',
                description: error.message,
                color: 'red',
            })

            return
        } else {
            success.value = true
        }

        toast.success('You have been signed in')
        
    } finally {
        pending.value = false
    }
}
</script>