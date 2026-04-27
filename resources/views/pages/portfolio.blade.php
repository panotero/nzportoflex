<div class="lg:m-5 p-5 rounded-lg bg-white text-black dark:bg-gray-800 dark:text-white ">
    <div class="container mx-auto px-4 space-y-6">

        <div id="headline-section"
            class="bg-white dark:bg-slate-900 p-6 rounded-xl shadow-sm border border-slate-100 dark:border-slate-800">

            <div class="flex justify-between mb-5">
                <div>
                    <h2 class="text-lg font-semibold text-slate-900 dark:text-white">Headline</h2>
                    <p class="text-sm text-slate-500 dark:text-slate-400">
                        The first thing visitors read.
                    </p>
                </div>

                <!-- Save button (hidden initially) -->
                <button id="headline-save-btn"
                    class="hidden px-5 py-2 rounded-lg bg-slate-900 text-white dark:bg-slate-100 dark:text-slate-900 text-sm font-medium active:scale-95 transition">
                    Save
                </button>
            </div>

            <div class="space-y-4">
                <input id="headline-main"
                    class="headline-input w-full border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none"
                    placeholder="Main headline" />

                <input id="headline-sub"
                    class="headline-input w-full border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none"
                    placeholder="Sub headline" />

                <input id="headline-cta"
                    class="headline-input w-full border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none"
                    placeholder="CTA label" />


            </div>
            <div class="flex justify-between my-5 ">
                <h2>Background</h2>
            </div>

            <textarea id="bg-text"
                class="headline-input input w-full border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none"
                rows="4"></textarea>
        </div>

        {{-- CONTACTS --}}
        <div id="contact-section"
            class="section-card bg-white dark:bg-slate-900 p-6 shadow-sm border border-slate-100 dark:border-slate-800">
            <div class="flex justify-between mb-5">
                <h2>Contact</h2>
                <button id="contact-save" class="hidden save-btn">Save</button>
            </div>

            <input id="contact-email"
                class="input w-full mb-2 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none"
                placeholder="Email">
            <input id="contact-phone"
                class="input w-full mb-2 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none"
                placeholder="Phone">

            <div id="social-list" class="space-y-2"></div>

            <button id="add-social" class="add-btn w-full mt-2">+ Add social</button>
        </div>


        <!-- SKILLS -->
        <div id="skills-section"
            class="section-card bg-white dark:bg-slate-900 p-6 shadow-sm border border-slate-100 dark:border-slate-800">
            <div class="flex justify-between mb-5">
                <h2>Skills</h2>
                <button id="skills-save" class="hidden save-btn">Save</button>
            </div>

            <div id="skills-list" class="space-y-3"></div>

            <button id="add-skill" class="add-btn w-full mt-4">+ Add skill</button>
        </div>

        {{-- TOOLS --}}
        <div id="tools-section"
            class="section-card bg-white dark:bg-slate-900 p-6 shadow-sm border border-slate-100 dark:border-slate-800">
            <div class="flex justify-between mb-5">
                <h2>Tools</h2>
                <button id="tools-save" class="hidden save-btn">Save</button>
            </div>

            <div id="tools-list" class="space-y-3">
            </div>

            <button id="add-tool" class="add-btn w-full mt-4">+ Add tool</button>
        </div>

        <!-- PROJECTS -->
        <div id="projects-section"
            class="section-card bg-white dark:bg-slate-900 p-6 shadow-sm border border-slate-100 dark:border-slate-800">
            <div class="flex justify-between mb-5">
                <h2>Projects</h2>
                <button id="projects-save" class="hidden save-btn">Save</button>
            </div>

            <div id="projects-list" class="grid grid-cols-1 gap-3"></div>

            <button id="add-project" class="add-btn w-full mt-4">+ Add project</button>
        </div>

    </div>
</div>

<script>
    (function() {
        function initImageUpload(wrapper, classname) {

            const fileInput = wrapper.querySelector(classname);
            const preview = wrapper.querySelector('.preview');
            const placeholder = wrapper.querySelector('.placeholder');
            const removeBtn = wrapper.querySelector('.remove-btn');

            fileInput.addEventListener('change', function() {
                const file = this.files[0];
                if (!file) return;

                if (!file.type.startsWith('image/')) {
                    alert('Only image files are allowed.');
                    this.value = '';
                    return;
                }

                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    placeholder.classList.add('hidden');
                    removeBtn.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            });

            removeBtn.addEventListener('click', () => {
                fileInput.value = '';
                preview.src = '';
                preview.classList.add('hidden');
                placeholder.classList.remove('hidden');
                removeBtn.classList.add('hidden');
            });
        }
        const CMS = {

            init() {
                this.bindHeadline();
                this.bindSkills();
                this.bindTools();
                this.bindProjects();
                this.bindContact();
            },

            // ================= HEADLINE =================
            bindHeadline() {
                const section = document.getElementById('headline-section');
                const inputs = section.querySelectorAll('.headline-input');
                const saveBtn = document.getElementById('headline-save-btn');

                inputs.forEach(input => {
                    input.addEventListener('input', () => saveBtn.classList.remove('hidden'));
                    input.addEventListener('change', () => saveBtn.classList.remove('hidden'));
                });

                saveBtn.addEventListener('click', async function() {
                    const data = {
                        main: document.getElementById('headline-main').value,
                        sub: document.getElementById('headline-sub').value,
                        cta: document.getElementById('headline-cta').value,
                        background: document.getElementById('bg-text').value,
                    };

                    const confirmed = await customConfirm("Delete this menu?");
                    if (!confirmed) return;
                    const response = await apiJSONPOST(data, 'api/headline', saveBtn);
                    console.log("response: " + response);
                    if (!response.success) {

                        showMessage({
                            status: "error",
                            title: "Error Saving Headline",
                            message: "There is some error saving your information. Please contact system administrator",
                        });
                        return;
                    };

                    showMessage({
                        status: "success",
                        title: "Headline Saved!",
                    });

                    saveBtn.classList.add('hidden');





                });
            },


            // ================= SKILLS =================
            bindSkills() {
                const list = document.getElementById('skills-list');
                const addBtn = document.getElementById('add-skill');
                const saveBtn = document.getElementById('skills-save');

                addBtn.onclick = () => {
                    const el = document.createElement('div');
                    el.className = "p-4 border rounded-lg bg-slate-50 dark:bg-slate-800";

                    el.innerHTML = `
                <label for="skillTitle">Skill Title</label>
                <input id="skillTitle" class="skill-title input w-full mb-2  border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none" placeholder="Skill title">
                <label for="skillDesccription">Skill Desccription</label>
                <input id="skillDesccription" class="skill-desc input w-full border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none" placeholder="Description">
            `;

                    list.appendChild(el);
                    saveBtn.classList.remove('hidden');

                    el.querySelectorAll('input').forEach(i =>
                        i.addEventListener('input', () => saveBtn.classList.remove('hidden'))
                    );
                };

                saveBtn.onclick = async function() {
                    const data = [];

                    document.querySelectorAll('#skills-list > div').forEach(card => {
                        data.push({
                            title: card.querySelector('.skill-title').value,
                            desc: card.querySelector('.skill-desc').value
                        });
                    });

                    console.log('Skills:', data);

                    const confirmed = await customConfirm("Delete this menu?");
                    if (!confirmed) return;
                    const response = await apiJSONPOST(data, 'api/skills', saveBtn);
                    console.log("response: " + response);
                    if (!response.success) {

                        showMessage({
                            status: "error",
                            title: "Error Saving Skills",
                            message: "There is some error saving your information. Please contact system administrator",
                        });
                        return;
                    };

                    showMessage({
                        status: "success",
                        title: "Projects Saved!",
                    });

                    saveBtn.classList.add('hidden');

                    console.log('Contact:', data);
                    saveBtn.classList.add('hidden');
                    saveBtn.classList.add('hidden');
                    saveBtn.classList.add('hidden');
                };
            },

            // ================= TOOLS =================
            bindTools() {
                const list = document.getElementById('tools-list');
                const addBtn = document.getElementById('add-tool');
                const saveBtn = document.getElementById('tools-save');

                addBtn.onclick = () => {
                    const el = document.createElement('div');
                    el.className = "p-4 border rounded-lg bg-slate-50 dark:bg-slate-800";

                    el.innerHTML = `

                    <div class="p-photos-wrapper">

    <label class="block text-xs font-medium text-slate-500 mb-2">
        Project Image
    </label>

    <div class="relative w-full">

        <!-- Upload Card -->
        <div class="upload-box flex flex-col items-center justify-center w-full h-40 border-2 border-dashed border-slate-300 dark:border-slate-700 rounded-xl cursor-pointer hover:border-slate-400 dark:hover:border-slate-500 transition text-center bg-slate-50 dark:bg-slate-900">

            <!-- Preview Image -->
            <img class="preview hidden absolute inset-0 w-full h-full object-cover rounded-xl" />

            <!-- Placeholder -->
            <div class="placeholder flex flex-col items-center justify-center text-slate-400">
                <svg class="w-8 h-8 mb-2 opacity-70" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path d="M3 16l5-5a2 2 0 012.828 0L15 15l3-3a2 2 0 012.828 0L21 13"></path>
                    <path d="M14 10h.01"></path>
                </svg>
                <p class="text-xs">Click to upload image</p>
            </div>

            <!-- Hidden Input -->
            <input type="file" accept="image/*" class="logo-input absolute inset-0 opacity-0 cursor-pointer">

        </div>

        <!-- Remove Button -->
        <button type="button" class="remove-btn hidden absolute top-2 right-2 bg-black/60 text-white text-xs px-2 py-1 rounded-md hover:bg-black">
            Remove
        </button>

    </div>
</div>
                    <label for="skillTitle">Tool Name</label>
                <input class="tool-title input w-full mb-2 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none" placeholder="Tool name">
                    <label for="skillTitle">Tool Description</label>
                <input class="tool-desc input w-full mb-2 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none" placeholder="Description">
                    <label for="skillTitle">Years of Experience</label>
                <input class="tool-years input w-full border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none" placeholder="Years of experience">
            `;

                    list.appendChild(el);

                    const uploadWrapper = el.querySelector('.p-photos-wrapper');
                    initImageUpload(uploadWrapper, '.logo-input');
                    saveBtn.classList.remove('hidden');


                    el.querySelectorAll('input').forEach(i =>
                        i.addEventListener('input', () => saveBtn.classList.remove('hidden'))
                    );
                };

                saveBtn.onclick = async function() {
                    const formData = new FormData();

                    document.querySelectorAll('#tools-list > div').forEach((card, index) => {
                        const logoInput = card.querySelector('.logo-input');

                        formData.append(`tools[${index}][title]`, card.querySelector(
                            '.tool-title').value);
                        formData.append(`tools[${index}][desc]`, card.querySelector(
                            '.tool-desc').value);
                        formData.append(`tools[${index}][years]`, card.querySelector(
                            '.tool-years').value);

                        if (logoInput.files[0]) {
                            formData.append(`tools[${index}][logo]`, logoInput.files[0]);
                        }
                    });

                    console.log('Tools:', formData);

                    const confirmed = await customConfirm("Delete this menu?");
                    if (!confirmed) return;
                    const response = await apiPOST(formData, 'api/tools', saveBtn);
                    console.log("response: " + response);
                    if (!response.success) {

                        showMessage({
                            status: "error",
                            title: "Error Saving Tools",
                            message: "There is some error saving your information. Please contact system administrator",
                        });
                        return;
                    };

                    showMessage({
                        status: "success",
                        title: "Tools Saved!",
                    });

                    saveBtn.classList.add('hidden');

                    console.log('Tools:', formData);
                    saveBtn.classList.add('hidden');
                };
            },

            // ================= PROJECTS =================
            bindProjects() {
                const list = document.getElementById('projects-list');
                const addBtn = document.getElementById('add-project');
                const saveBtn = document.getElementById('projects-save');

                addBtn.onclick = () => {
                    const el = document.createElement('div');
                    el.className = "p-4 border rounded-lg bg-slate-50 dark:bg-slate-800 space-y-2";

                    el.innerHTML = `
                <input class="p-title input w-full border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none" placeholder="Project title">
                <input class="p-duration input w-full border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none" placeholder="Duration">
                <textarea class="p-desc input w-full border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none" placeholder="Description"></textarea>
                <input class="p-link input w-full border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none" placeholder="Project link">

                <select class="p-type input w-full border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none">Select Link Type
                    <option value="video">Video</option>
                    <option value="website">Website</option>
                    <option value="drive">Drive</option>
                </select>
                <select class="p-skill input w-full border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none">Select Skill Associated
                    <option value="1">videography</option>
                    <option value="2">Web Development</option>
                </select>

                <input type="file" multiple class="p-photos input w-full">
            `;

                    list.appendChild(el);
                    saveBtn.classList.remove('hidden');

                    el.querySelectorAll('input, textarea, select').forEach(i =>
                        i.addEventListener('input', () => saveBtn.classList.remove('hidden'))
                    );
                };

                saveBtn.onclick = async function() {
                    const data = [];

                    document.querySelectorAll('#projects-list > div').forEach(card => {
                        data.push({
                            title: card.querySelector('.p-title').value,
                            duration: card.querySelector('.p-duration').value,
                            desc: card.querySelector('.p-desc').value,
                            link: card.querySelector('.p-link').value,
                            type: card.querySelector('.p-type').value,
                            photos: card.querySelector('.p-photos').files.length,
                            skill: card.querySelector('.p-skill').value,
                        });
                    });

                    console.log('Projects:', data);

                    const confirmed = await customConfirm("Delete this menu?");
                    if (!confirmed) return;
                    const response = await apiJSONPOST(data, 'api/projects', saveBtn);
                    console.log("response: " + response);
                    if (!response.success) {

                        showMessage({
                            status: "error",
                            title: "Error Saving Projects",
                            message: "There is some error saving your information. Please contact system administrator",
                        });
                        return;
                    };

                    showMessage({
                        status: "success",
                        title: "Projects Saved!",
                    });

                    saveBtn.classList.add('hidden');

                    console.log('Contact:', data);
                    saveBtn.classList.add('hidden');
                    saveBtn.classList.add('hidden');
                };
            },

            // ================= CONTACT =================
            bindContact() {
                const saveBtn = document.getElementById('contact-save');
                const addBtn = document.getElementById('add-social');
                const list = document.getElementById('social-list');

                document.querySelectorAll('#contact-section input').forEach(i =>
                    i.addEventListener('input', () => saveBtn.classList.remove('hidden'))
                );

                addBtn.onclick = () => {
                    const el = document.createElement('input');
                    el.className =
                        "input w-full border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none";
                    el.placeholder = "Social link";

                    list.appendChild(el);

                    el.addEventListener('input', () => saveBtn.classList.remove('hidden'));
                    saveBtn.classList.remove('hidden');
                };

                saveBtn.onclick = async function() {
                    const socials = [];

                    document.querySelectorAll('#social-list input').forEach(i => socials.push(i.value));

                    const data = {
                        email: document.getElementById('contact-email').value,
                        phone: document.getElementById('contact-phone').value,
                        socials
                    };

                    const confirmed = await customConfirm("Delete this menu?");
                    if (!confirmed) return;
                    const response = await apiJSONPOST(data, 'api/contact', saveBtn);
                    console.log("response: " + response);
                    if (!response.success) {

                        showMessage({
                            status: "error",
                            title: "Error Saving Contacts",
                            message: "There is some error saving your information. Please contact system administrator",
                        });
                        return;
                    };

                    showMessage({
                        status: "success",
                        title: "Contacts Saved!",
                    });

                    saveBtn.classList.add('hidden');

                    console.log('Contact:', data);
                    saveBtn.classList.add('hidden');
                };
            }
        };

        CMS.init();
    })();
</script>
