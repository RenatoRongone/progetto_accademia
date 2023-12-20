<x-layout>
    <main class="mainCreateAnnouncements p-4">
        <section class="container-fluid createAnnouncementsBackground d-flex flex-column justify-content-center createAnnouncementsHeight">
            
            <div class="row">
                <div class="col-12 d-flex flex-column justify-content-center py-2">
                    <h1 class="text-center">{{__('ui.crea-annunci')}}</h1>
                </div>
            </div>
            
            <div class="row justify-content-center px-5 px-md-0">
                <livewire:create-announcement/>
            </div>
        </section>
    </main>
</x-layout>