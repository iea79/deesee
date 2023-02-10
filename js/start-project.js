function checkForm() {
    const form = document.querySelector('.startProject__steps');
    const radios = form.querySelectorAll('input[type=radio]');
    const next = form.querySelector('.btn_next');
    const back = form.querySelector('.btn_back');
    const send = form.querySelector('.btn_send');
    const counterBlock = form.querySelector('.startProject__counter');
    const steps = form.querySelectorAll('.startProject__step');
    const genders = form.querySelectorAll('.gender__toggle [type=checkbox]');
    const gendersRows = form.querySelectorAll('.gender__plate .startProject__row');
    const loader = form.querySelector('.startProject__loader');
    let stepNumber = 1;

    radios.forEach((radio, i) => {
        radio.addEventListener('change', ({target}) => {
            switchRadio(radio);
        });
    });

    function switchRadio(target) {
        const wrap = target.closest('.startProject__check').parentElement;
        const stepRadios = target.closest('.startProject__form').querySelectorAll('input[type=radio]');

        stepRadios.forEach((item, i) => {
            item.parentElement.parentElement.classList.remove('checked');
        });

        if (target.checked) {
            wrap.classList.add('checked');
        } else {
            wrap.classList.remove('checked');
        }
    }

    next.addEventListener('click', e => {
        e.preventDefault();
        if (stepNumber < steps.length) {
            checkStepsField(stepNumber);
        }
    });

    back.addEventListener('click', e => {
        e.preventDefault();
        if (stepNumber > 1) {
            toggleSteps(--stepNumber);
        }
    });

    genders.forEach((gender) => {
        gender.addEventListener('change', ({target}) => {
            const { value, checked } = target;
            // console.log(checked);
            gendersRows.forEach((row) => {
                if (value === row.dataset.gender) {
                    if (checked) {
                        row.classList.add('active');
                    } else {
                        row.classList.remove('active');
                    }
                }
            });
        });
    });

    function toggleSteps(stepNumber) {
        if (stepNumber == 1) {
            back.disabled = true;
        } else {
            back.disabled = false;
        }
        if (stepNumber == steps.length) {
            next.style.display = 'none';
            send.style.display = 'block';
        } else {
            next.style.display = '';
            send.style.display = '';
        }
        steps.forEach((step, i) => {
            step.classList.remove('active');
            if (step.dataset.step == stepNumber) {
                step.classList.add('active');
                counterBlock.innerHTML = stepNumber + '/' + steps.length;
            }
        });
    }

    // File upload ==================================================================
    const dropAreaChecked = document.querySelectorAll('[name="step2"]');
    const dropArea = document.getElementById("drop-area");
    const inputFile = document.getElementById("file");
    const dropText = document.querySelector(".dropArea__text");
    const dropPercent = document.querySelector('.dropArea__percent');
    const dropIcon = document.querySelector('.dropArea__icon');
    let loadedFiles;
    let dropTextName = "";
    let uploadProgress = [];


    inputFile.addEventListener('change', function(e) {
        handleFiles(this.files);
    });

    dropAreaChecked.forEach((item, i) => {
        item.addEventListener('change', ({target}) => {
            if (target.value === 'no') {
                inputFile.disabled = true;
                dropArea.classList.add('disable');
            } else {
                inputFile.disabled = false;
                dropArea.classList.remove('disable');
            }
        });
    });

    // Prevent default drag behaviors
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, preventDefaults, false);
        document.body.addEventListener(eventName, preventDefaults, false);
    });

    // Highlight drop area when item is dragged over it
    ['dragenter', 'dragover'].forEach(eventName => {
        dropArea.addEventListener(eventName, highlight, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, unhighlight, false);
    });

    // Handle dropped files
    dropArea.addEventListener('drop', handleDrop, false);

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    };

    function highlight(e) {
        dropArea.classList.add('highlight');
    };

    function unhighlight(e) {
        dropArea.classList.remove('active');
    };

    function handleDrop(e) {
        var dt = e.dataTransfer;
        var files = dt.files;

        if (files.length) {
            loadedFiles = files;
            handleFiles(files);
            uplpoadFiles(files);
        } else {
            inputFile.value = "";
        }
    };

    function initializeProgress(numFiles) {
        // progressBar.value = 0;
        dropTextName = "";
        uploadProgress = [];
        dropIcon.classList.remove('loading');
        dropPercent.innerHTML = "0%";
        dropText.innerHTML = "Uploading file...";
        setProgress(0);

        for(let i = numFiles; i > 0; i--) {
            uploadProgress.push(0);
        }
    };

    function updateProgress(fileNumber, percent) {
        dropIcon.classList.add('loading');
        uploadProgress[fileNumber] = percent;
        setProgress(percent);
        dropPercent.innerHTML = percent + "%";
        if (percent === 100) {
            dropArea.classList.add('highlight');
            dropText.innerHTML = "Loaded " + dropTextName;
        }
    };

    function handleFiles(files) {
        files = [...files];
        initializeProgress(files.length);
        files.forEach((item, i) => {
            setTimeout(function () {
                uploadFile(item, i)
            }, 350 * i);
        });
    };

    function uploadFile(file, i) {
        dropTextName += file.name + ", ";
        updateProgress(i, ((i+1) * 100.0 / uploadProgress.length) || 100);
    };

    // Upload progress
    let circle = dropArea.querySelector('circle');
    let radius = circle.r.baseVal.value;
    let circumference = radius * 2 * Math.PI;

    circle.style.strokeDasharray = `${circumference} ${circumference}`;
    circle.style.strokeDashoffset = `${circumference}`;

    function setProgress(percent) {
        const offset = circumference - percent / 100 * circumference;
        circle.style.strokeDashoffset = offset;
    }
    setProgress(0);

    // Form submitt =======================================================================
    form.onsubmit = async (e) => {
        e.preventDefault();
        loader.classList.add('show');
        let data = new FormData(form);
        data.append('action', 'start_project_form');
        data.append('nonce', start_project_object.nonce);

        await fetch(start_project_object.url, {
            method: 'POST',
            body: data
        })
        .then(resp => resp.json())
        .then(json => {
            if (json.success === true) {
                location.href = '/get-in-touch-success/';
            }
            loader.classList.remove('show');
        })
        .catch(err => {
            loader.classList.remove('show');
        })
    };

    function showError(text) {
        const box = form.querySelector('.startProject__err');
        box.innerHTML = text;
        timer = setTimeout(function () {
            box.innerHTML = "";
        }, 7000);
        // console.log(text);
    }

    function checkStepsField(step) {
        const content = form.querySelector('[data-step="'+step+'"]');
        // const fields = content.querySelectorAll('input');
        const textarea = content.querySelector('textarea');
        // console.log(fields);
        switch (step) {
            case 2:
                const radio2 = content.querySelector('[type=radio]:checked').value;
                // const file = content.querySelector('[type=file]');
                console.log(loadedFiles);
                if (radio2 === 'no' || (radio2 === 'yes' && loadedFiles && loadedFiles.length)) {
                    toggleSteps(++stepNumber);
                } else {
                    showError('File not uploaded');
                }
                break;
            case 3:
                const age = content.querySelector('[type=hidden]');
                const ages = content.querySelectorAll('.gender__plate [type=checkbox]:checked');
                let ageNames = '';

                ages.forEach(checkbox => {
                    ageNames += checkbox.value + ', ';
                    age.value = ageNames;
                });
                if (age && age.value) {
                    toggleSteps(++stepNumber);
                } else {
                    showError('Please enter at least one age group');
                }

                break;
            case 6:
                const emotions = content.querySelectorAll('[type=checkbox]:checked');
                const emotion = content.querySelector('[type=hidden]');
                let names = "";

                emotions.forEach((checkbox, i) => {
                    names += checkbox.value + ', ';
                    emotion.value = names;
                });
                if (emotion && emotion.value) {
                    toggleSteps(++stepNumber);
                } else {
                    showError('Specify at least one parameter');
                }
                break;
            case 7:
                textareaCheck(textarea);
                break;
            case 8:
                textareaCheck(textarea);
                break;
            case 9:
                textareaCheck(textarea);
                break;
            case 9:

                break;
            default:
                toggleSteps(++stepNumber);
        }

        function textareaCheck(textarea) {
            if (textarea && textarea.value) {
                toggleSteps(++stepNumber);
            } else {
                showError('Fill out the required field');
            }
        }
    }

    function uplpoadFiles(files) {
        console.log(files);
        const input = form.querySelector('[name="uploaded"]');

        // ничего не делаем если files пустой
        if( typeof files == 'undefined' ) return;

        // создадим объект данных формы
        var data = new FormData();

        // заполняем объект данных файлами в подходящем для отправки формате
        files.forEach((value, key) => {
            data.append( key, value );
        });

        // добавим переменную для идентификации запроса
        data.append( 'action', 'file_upload');
        // data.append( 'nonce', nonce );

        fetch('/wp-admin/admin-ajax.php', {
            method: 'POST',
            body: data
        })
        .then(resp => resp.json())
        .then(json => {
            if (json.success === true) {
                let vals = "";
                json.data.forEach(item => {
                    vals += item + ', ';
                    input.value = vals;
                });
            } else {
                inputFile.value = "";
                setProgress(0);
                showError('File not uploaded');
            }
            // console.log(json)
        })
        .catch(err => {
            // console.log(err);
            setProgress(0);
            inputFile.value = "";
            showError('File not uploaded');
        })
    }
}

document.addEventListener('DOMContentLoaded', () => {
    checkForm();
});
