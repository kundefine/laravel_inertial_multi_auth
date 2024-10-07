import React from 'react';
import {Head, useForm} from "@inertiajs/react";
import AdminAuthenticated from '@/Layouts/AdminAuthenticatedLayout.jsx';

function Dashboard({canResetPassword, status}) {
    return (
        <AdminAuthenticated
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Admin Dashboard
                </h2>
            }
        >
            <Head title="Admin Dashboard"/>

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900">
                            You're logged in!
                        </div>
                    </div>
                </div>
            </div>

        </AdminAuthenticated>
    );
}

export default Dashboard;
