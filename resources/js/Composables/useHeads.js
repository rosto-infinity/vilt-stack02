// useAuth.js
import { defineProps, toRefs } from 'vue';

export default function useAuth() {
    const props = defineProps({
        canLogin: {
            type: Boolean,
            required: true
        },
        canRegister: {
            type: Boolean,
            required: true
        }
    });

    return toRefs(props);
}
