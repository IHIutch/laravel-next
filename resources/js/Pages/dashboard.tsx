import { Head } from "@inertiajs/react";

export default function Dashboard({ parcels }: { parcels: any[] }) {
    return (
        <>
            <Head title="Dashboard" />
            <div className="py-12">
                <pre>{JSON.stringify(parcels, null, 2)}</pre>
            </div>
        </>
    );
}
