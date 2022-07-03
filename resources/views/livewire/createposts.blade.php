<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mb-4">
                            <label 
                                class="block text-gray-700 text-sm font-bold mb-2">Judul:</label>
                            <input type="text"
                                class="form-control bg-dark text-light text-center"
                             placeholder="Masukkan Judul" wire:model="judul"/>
                            
                        </div>
                        <div class="mb-4">
                            <label 
                                class="block text-gray-700 text-sm font-bold mb-2">Thumbnail:</label>
                            <input type="file"  wire:model="thumbnail">
                            <input type="text" wire:model="penulis" value="{{Auth()->user()->name}}" style="display:none;">
                            
                        </div>
                        <div class="mb-4">
                            <label 
                                class="block text-gray-700 text-sm font-bold mb-2">Kategori:</label>
                            <input type="text"
                                class="form-control bg-dark text-light text-center"
                             placeholder="Masukkan Kategori" wire:model="kategori">
                            
                        </div>
                        <div class="mb-4">
                            <label 
                                class="block text-gray-700 text-sm font-bold mb-2">Slug/Permalink:</label>
                            <input type="text"
                                class="form-control bg-dark text-light text-center"
                             placeholder="Masukkan Slug/Permalink" wire:model="slug">
                        </div>
                        <div class="mb-4">
                            <label 
                                class="block text-gray-700 text-sm font-bold mb-2">Deskripsi:</label>
                            <input type="text"
                                class="form-control bg-dark text-light text-center"
                             placeholder="Masukkan Deskripsi" wire:model="deskripsi">
                        </div>
                        <div wire:ignore class="form-group row">
    <div class="mb-4">
        <textarea wire:model="isikonten" class="form-control required" name="isikonten" id="isikonten"></textarea>
    </div>
</div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button"
                            class="btn btn-success">
                            Simpan
                        </button>
                    </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        <button wire:click="closeModalPopover()" type="button"
                            class="btn btn-danger">
                            Tutup
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
<script>
            const editor = CKEDITOR.replace('isikonten');
            editor.on('change', function(event){
                console.log(event.editor.getData())
                @this.set('isikonten', event.editor.getData());
            })
</script>