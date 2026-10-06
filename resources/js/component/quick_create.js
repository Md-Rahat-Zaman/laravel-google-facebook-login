
document.addEventListener('DOMContentLoaded', function () {

    const modal = document.getElementById('quickCreateModal');
    const form = document.getElementById('quickCreateForm');

    if (!modal || !form) return;

    const title = document.getElementById('quickCreateModalTitle');
    const subtitle = document.getElementById('quickCreateModalSubtitle');
    const method = document.getElementById('quickCreateMethod');
    const name = document.getElementById('quickCreateName');
    const description = document.getElementById('quickCreateDescription');
    const status = document.getElementById('quickCreateStatus');
    const saveText = document.getElementById('quickCreateSaveText');


    /*
    |--------------------------------------------------------------------------
    | Open Quick Create Modal
    |--------------------------------------------------------------------------
    */

    document.querySelectorAll('.quick-create-btn').forEach(button => {

        button.addEventListener('click', function () {

            const mode = this.dataset.mode;
            const type = this.dataset.type;

            // CREATE
            if (mode === 'create' && type === 'category') {

                form.action = '/categories';
                method.value = 'POST';

                title.textContent = 'Add Category';
                subtitle.textContent = 'Create a new category';
                saveText.textContent = 'Save Category';

                name.value = '';
                description.value = '';
                status.value = '1';
            }


            // EDIT
            if (mode === 'edit' && type === 'category') {

                const category = JSON.parse(
                    this.dataset.category
                );

                form.action = '/categories/' + category.id;
                method.value = 'PUT';

                title.textContent = 'Edit Category';
                subtitle.textContent = 'Update category information';
                saveText.textContent = 'Update Category';

                name.value = category.name ?? '';
                description.value = category.description ?? '';
                status.value = category.status ?? '1';
            }

        });

    });


    /*
    |--------------------------------------------------------------------------
    | AJAX Submit
    |--------------------------------------------------------------------------
    */

    form.addEventListener('submit', function (e) {

        e.preventDefault();

        const formData = new FormData(form);

        fetch(form.action, {

            method: 'POST',

            headers: {
                'X-CSRF-TOKEN': document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute('content'),

                'Accept': 'application/json'
            },

            body: formData

        })

        .then(response => {

            return response.json().then(data => {

                if (!response.ok) {
                    throw data;
                }

                return data;
            });

        })

        .then(data => {

            if (!data.success) {
                return;
            }


            /*
            |--------------------------------------------------------------------------
            | Product Page
            |--------------------------------------------------------------------------
            */

            const categorySelect = document.querySelector(
                'select[name="category_id"]'
            );


            if (categorySelect && data.category) {

                /*
                Remove duplicate category
                */

                const existingOption = categorySelect.querySelector(
                    `option[value="${data.category.id}"]`
                );

                if (existingOption) {

                    existingOption.selected = true;

                } else {

                    const option = new Option(
                        data.category.name,
                        data.category.id,
                        true,
                        true
                    );

                    categorySelect.appendChild(option);
                }

                /*
                New category automatically selected
                */

                categorySelect.value = data.category.id;

                /*
                Trigger change event if Select2 is used
                */

                categorySelect.dispatchEvent(
                    new Event('change', { bubbles: true })
                );
            }


            /*
            |--------------------------------------------------------------------------
            | Close Modal
            |--------------------------------------------------------------------------
            */

            const modalInstance = bootstrap.Modal.getInstance(modal);

            if (modalInstance) {
                modalInstance.hide();
            }


            /*
            |--------------------------------------------------------------------------
            | Reset Modal Form
            |--------------------------------------------------------------------------
            */

            form.reset();

            method.value = 'POST';
            status.value = '1';

        })

        .catch(error => {

            console.error('Category create error:', error);

        });

    });

});