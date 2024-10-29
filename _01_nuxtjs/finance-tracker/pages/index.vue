<template>
    <div>

        <section class="flex items-center justify-between mb-10">
            <h1 class="text-4xl font-extrabold">Summary</h1>
            
            <div>
                <USelectMenu  :options="transactionViewOptions" v-model="selectedView" />
            </div>
            
        </section>
        
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 sm:gap-16 mb-10">
            <Trend color="green" title="Income" :amount="4000" :last-amount="3000" :loading="false" />
            <Trend color="red" title="Expense" :amount="4000" :last-amount="4100" :loading="false" />
            <Trend color="green" title="Investments" :amount="4000" :last-amount="3000" :loading="false" />
            <Trend color="red" title="Saving" :amount="4000" :last-amount="4100" :loading="false" />
        </section>

        <section class="flex justify-between mb-10">
            <div>
                <h2 class="text-2xl font-extrabold">Transactions</h2>
            
                <div class="text-gray-500 dark:text-gray-400">
                    You have {{ incomeCount }} incomes and {{ expenseCount }} expenses this period
                </div>
            </div>
            
            <div>
                <TransactionModal v-model="isOpen" @saved="refresh()" />
                <UButton icon="i-heroicons-plus-circle" color="white" variant="solid" label="Add" @click="isOpen = true" />
            </div>
        </section>

        <section v-if="!pending">
            <div v-for="(transactionsOnDay, date) in byDate" :key="date" class="mb-10">
                <DailyTransactionSummary :date="date" :transactions="transactionsOnDay" />
                <Transaction v-for="transaction in transactionsOnDay" :key="transaction.id" :transaction="transaction"
                    @deleted="refresh()" @edited="refresh()" />
            </div>
        </section>
        <section v-else>
            <USkeleton class="h-8 w-full mb-2" v-for="i in 4" :key="i" />
        </section>
    </div>
</template>

<script setup>
import {transactionViewOptions} from '~/constants'

const selectedView = ref(transactionViewOptions[1])

const supabase = useSupabaseClient()

const transactions = ref([])

const { data, status } = await useAsyncData('transactions', async() => {
    const { data, error } = await supabase
        .from('transactions')
        .select()
    
    if (error) throw error

    return data
})

transactions.value = data.value

const transactionsGroupedByDate = computed(() => {
    let  grouped = {}
    
    for (const transaction of transactions.value) {
        const date = new Date(transaction.created_at).toISOString().split('T')[0]

        if(!grouped[date]) {
            grouped[date] = []
        }

        grouped[date].push(transaction)
    }

    return grouped
})
</script>