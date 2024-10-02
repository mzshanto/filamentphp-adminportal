
<div>
    <div x-data="{ adminCount: {{ $initialAdminCount }} }" x-init="
            window.Echo.channel('userUpdate')
                .listen('UserUpdated', (e) => {
                    console.log('Admin count:', e.adminCount);
                    adminCount = e.adminCount; // Update adminCount with the event data
                });
            ">
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            Admin Count: <span x-text="adminCount"></span>
        </h2>
    </div>
</div>
