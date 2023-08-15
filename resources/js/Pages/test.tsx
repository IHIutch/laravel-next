import { useForm } from "@inertiajs/react";
import { FormEvent } from "react";

export default function test({ test }: { test: [] }) {
    const { data, setData, errors, patch, processing } = useForm({
        blah: "this is a test",
    });

    function handleSubmit(e: FormEvent) {
        e.preventDefault();

        // NOTE: We are using POST method here, not PUT/PACH. See comment above.
        patch(route("parcel.update", "123"));
    }

    return (
        <div>
            Hello?
            <div>
                <pre>{JSON.stringify(test, null, 2)}</pre>
            </div>
            <form onSubmit={handleSubmit}>
                <button disabled={processing} type="submit">
                    Crawl
                </button>
            </form>
        </div>
    );
}
