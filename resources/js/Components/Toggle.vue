<script setup>
import {onMounted, ref, watch} from 'vue'
import { Switch } from '@headlessui/vue'

const props = defineProps(['modelValue'])
const emit = defineEmits(['update:modelValue'])

const enabled = ref(false)

onMounted(() => {
    enabled.value = props.modelValue
})

watch(enabled, (value) => {
    emit('update:modelValue', value)
});


</script>

<template>
    <Switch v-model="enabled" :class="[enabled ? 'bg-indigo-600' : 'bg-gray-200', 'relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2']">
        <span class="sr-only">Use setting</span>
        <span aria-hidden="true" :class="[enabled ? 'translate-x-5' : 'translate-x-0', 'pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out']" />
    </Switch>
</template>

