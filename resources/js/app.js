import './bootstrap';

import Compressor from 'compressorjs'

if (window.jQuery) {
    window
        .jQuery(".form-edit-add .form-group [type='file']")
        .on("change", function () {
            var self = this;
            const buttonSave = self.closest('form').querySelector('button.save')

            if(buttonSave) {
                buttonSave.setAttribute('disabled', 'disabled')
            }

            const elFiles = this.files;

            if (elFiles.length) {

                let container = new DataTransfer();

                elFiles.forEach((e, index) => {
                    setTimeout(() => {

                        new Compressor(elFiles[index], {
                            quality: 1,
                            maxWidth: 1280,

                            success(result) {
                                const file = new File([result], result.name, { type: "image/jpeg", lastModified: new Date().getTime() }, 'utf-8');
                                container.items.add(file);
                                self.files = container.files;

                                if(buttonSave) {
                                    buttonSave.removeAttribute('disabled', '')
                                }
                            },
                            error(err) {
                                console.log(err.message);

                                if(buttonSave) {
                                    buttonSave.removeAttribute('disabled', '')
                                }
                            }
                        });

                    }, (index + 1) * 500);

                })

            }
        });
}
