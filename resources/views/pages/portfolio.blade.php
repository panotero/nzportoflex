<div class="w-full h-96 overflow-auto rounded-md p-2" id="loaderContainer">
    <div class="mx-auto w-full rounded-md p-4 animate-pulse mt-4 min-w-max">
        <div class="w-full flex space-x-4">
            <div class="h-10 w-10 rounded-full bg-gray-200"></div>
            <div class="flex-1 space-y-6 py-1">
                <div class="h-2 rounded bg-gray-200"></div>
                <div class="space-y-3">
                    <div class="grid grid-cols-3 gap-4">
                        <div class="col-span-2 h-2 rounded bg-gray-200"></div>
                        <div class="col-span-1 h-2 rounded bg-gray-200"></div>
                    </div>
                    <div class="h-2 rounded bg-gray-200"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="lg:m-5 p-5 rounded-lg bg-white text-black dark:bg-gray-800 dark:text-white ">


    <div class="container mx-auto px-4 space-y-6 hidden" id="mainContainer">
        <div id="headline-section"
            class="section-card bg-white dark:bg-slate-900 p-6 rounded-xl shadow-sm border border-slate-100 dark:border-slate-800">

            <!-- Header -->
            <div class="flex justify-between items-start mb-5">

                <div>
                    <h2 class="text-sm font-semibold text-slate-900 dark:text-white">
                        Headline
                    </h2>
                    <p class="text-xs text-slate-500 dark:text-slate-400">
                        The first thing visitors read.
                    </p>
                </div>

                <button id="headline-save-btn"
                    class="hidden px-5 py-2 rounded-lg bg-slate-900 text-white dark:bg-slate-100 dark:text-slate-900 text-sm font-medium active:scale-95 transition">
                    Save
                </button>

            </div>

            <!-- Headline Fields -->
            <label class="block text-xs font-medium text-slate-500 mb-1">
                Main Headline
            </label>
            <input id="headline-main"
                class="headline-input w-full mb-3 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none"
                placeholder="Main headline">

            <label class="block text-xs font-medium text-slate-500 mb-1">
                Sub Headline
            </label>
            <input id="headline-sub"
                class="headline-input w-full mb-3 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none"
                placeholder="Sub headline">

            <label class="block text-xs font-medium text-slate-500 mb-1">
                CTA Label
            </label>
            <input id="headline-cta"
                class="headline-input w-full mb-4 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none"
                placeholder="CTA label">

            <!-- Background Section -->
            <div class="mb-3">
                <h3 class="text-xs font-semibold text-slate-600 dark:text-slate-300">
                    Background
                </h3>
            </div>

            <textarea id="bg-text"
                class="headline-input w-full border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none"
                rows="4" placeholder="Background text..."></textarea>

        </div>

        {{-- CONTACTS --}}
        <div id="contact-section"
            class="section-card bg-white dark:bg-slate-900 p-6 shadow-sm border border-slate-100 dark:border-slate-800">

            <!-- Header -->
            <div class="flex justify-between items-center mb-5">
                <h2 class="text-sm font-semibold text-slate-700 dark:text-slate-200">
                    Contact
                </h2>

                <button id="contact-save" class="hidden save-btn">
                    Save
                </button>
            </div>

            <!-- Email -->
            <label class="block text-xs font-medium text-slate-500 mb-1">
                Email
            </label>
            <input id="contact-email"
                class="input w-full mb-3 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none"
                placeholder="Email">

            <!-- Phone -->
            <label class="block text-xs font-medium text-slate-500 mb-1">
                Phone
            </label>
            <input id="contact-phone"
                class="input w-full mb-4 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none"
                placeholder="Phone">

            <!-- Social Section -->
            <label class="block text-xs font-medium text-slate-500 mb-2">
                Social Links
            </label>

            <div id="social-list" class="space-y-3"></div>

            <button id="add-social" class="add-btn w-full mt-3">
                + Add social
            </button>
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

            <div id="tools-list" class="grid grid-cols-1 md:grid-cols-4 gap-4">
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

            <div id="projects-list" class="grid grid-cols-1 md:grid-cols-4 gap-4">
            </div>

            <button id="add-project" class="add-btn w-full mt-4">+ Add project</button>
        </div>

    </div>
</div>

<script>
    (function() {
        console.log(@json(auth()->user()->uuid));

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

        function addSkillRow(skills = false) {

            const el = document.createElement('div');
            let skillsHTML = ``;
            const isEdit = !!skills;

            const skillId = skills?.id || "";
            const title = skills?.title || "";
            const description = skills?.description || "";

            skillsHTML = `
<input type="hidden" name="skillID" value="${skillId}">

<label class="block text-xs font-medium text-slate-500 mb-1">Skill Title</label>
<input
    class="skill-title input w-full mb-3 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none"
    placeholder="Skill title"
    value="${title}"
>

<label class="block text-xs font-medium text-slate-500 mb-1">Description</label>
<input
    class="skill-desc input w-full border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none"
    placeholder="Description"
    value="${description}"
>
`;
            el.className = "p-4 border rounded-lg bg-slate-50 dark:bg-slate-800";

            el.innerHTML = skillsHTML;

            el.querySelectorAll('input').forEach(i =>
                i.addEventListener('input', () => saveBtn.classList.remove('hidden'))
            );
            return el;
        }

        function addToolRow(tool = false) {

            const el = document.createElement('div');
            el.className = "p-4 border rounded-lg bg-slate-50 dark:bg-slate-800";

            let toolHTML = ``;
            const isEdit = !!tool;

            const logoSrc = tool?.logo || "";
            const title = tool?.title || "";
            const description = tool?.description || "";
            const years = tool?.years_experience || "";
            const id = tool?.id || "";

            toolHTML = `
<label class="block text-xs font-medium text-slate-500 mb-1">Tool Image</label>

<div class="p-photos-wrapper mb-3">

    <div class="relative w-full">

        <!-- Upload Card -->
        <div class="upload-box flex flex-col items-center justify-center w-full h-40 border-2 border-dashed border-slate-300 dark:border-slate-700 rounded-xl cursor-pointer hover:border-slate-400 dark:hover:border-slate-500 transition text-center bg-slate-50 dark:bg-slate-900">

            <!-- Preview Image -->
            <img
                class="preview absolute inset-0 w-full h-full object-cover rounded-xl ${logoSrc ? '' : 'hidden'}"
                src="${logoSrc}"
            />

            <!-- Placeholder -->
            <div class="placeholder flex flex-col items-center justify-center text-slate-400 ${logoSrc ? 'hidden' : ''}">
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

<input type="hidden" class="tool-id" value="${id}">
<input type="hidden" class="tool-logo" value="${logoSrc}">

<label class="block text-xs font-medium text-slate-500 mb-1">Tool Name</label>
<input
    class="tool-title input w-full mb-3 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none"
    placeholder="Tool name"
    value="${title}"
>

<label class="block text-xs font-medium text-slate-500 mb-1">Description</label>
<input
    class="tool-desc input w-full mb-3 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none"
    placeholder="Description"
    value="${description}"
>

<label class="block text-xs font-medium text-slate-500 mb-1">Years of Experience</label>
<input
    class="tool-years input w-full border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none"
    placeholder="Years of experience"
    value="${years}"
>
`;


            el.innerHTML = toolHTML;
            el.querySelectorAll('input').forEach(i => {

                const eventType = i.type === 'file' ? 'change' : 'input';

                i.addEventListener(eventType, () => {
                    document.getElementById('tools-save').classList.remove('hidden');
                });

            });

            const uploadWrapper = el.querySelector('.p-photos-wrapper');
            initImageUpload(uploadWrapper, '.logo-input');
            return el;
        }

        function addProjectRow(project = false) {

            const el = document.createElement('div');

            let projectHTML = ``;
            const title = project?.title || "";
            const duration = project?.duration || "";
            const desc = project?.description || "";
            const link = project?.project_url || "";
            const type = project?.url_type || "";
            const skill = project?.skills || "";

            projectHTML = `
<label class="block text-xs font-medium text-slate-500 mb-1">Project Title</label>
<input
    class="p-title input w-full mb-3 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none"
    placeholder="Project title"
    value="${title}"
>

<label class="block text-xs font-medium text-slate-500 mb-1">Duration</label>
<input
    class="p-duration input w-full mb-3 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none"
    placeholder="Duration"
    value="${duration}"
>

<label class="block text-xs font-medium text-slate-500 mb-1">Description</label>
<textarea
    class="p-desc input w-full mb-3 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none"
    placeholder="Description"
    rows="8"
>${desc}</textarea>

<label class="block text-xs font-medium text-slate-500 mb-1">Project Link</label>
<input
    class="p-link input w-full mb-3 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none"
    placeholder="Project link"
    value="${link}"
>

<label class="block text-xs font-medium text-slate-500 mb-1">Link Type</label>
<select class="p-type input w-full mb-3 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none">
    <option value="video" ${type === "video" ? "selected" : ""}>Video</option>
    <option value="website" ${type === "website" ? "selected" : ""}>Website</option>
    <option value="drive" ${type === "drive" ? "selected" : ""}>Drive</option>
</select>

<label class="block text-xs font-medium text-slate-500 mb-1">Associated Skill</label>
<select class="p-skill input w-full mb-3 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none">
    <option value="1" ${skill == 1 ? "selected" : ""}>Videography</option>
    <option value="2" ${skill == 2 ? "selected" : ""}>Web Development</option>
</select>

<label class="block text-xs font-medium text-slate-500 mb-1">Project Files</label>
<input type="file" multiple class="p-photos input w-full">
`;

            el.className = "p-4 border rounded-lg bg-slate-50 dark:bg-slate-800 space-y-2";

            el.innerHTML = projectHTML;
            el.querySelectorAll('input, textarea, select').forEach(i =>
                i.addEventListener('input', () => document.getElementById('projects-save').classList.remove(
                    'hidden'))
            );
            return el;
        }

        function addProfileLinkRow(link = false) {

            const el = document.createElement('input');
            el.className =
                "input w-full border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 rounded-lg px-4 py-2 text-sm focus:border-slate-400 outline-none";
            el.placeholder = "Social link";
            if (link) {
                el.value = link;
                return el;
            }


            el.addEventListener('input', () => document.getElementById('contact-save').classList.remove('hidden'));
            document.getElementById('contact-save').classList.remove('hidden');

            return el;
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
                    const skillrow = addSkillRow();
                    list.appendChild(skillrow);
                    saveBtn.classList.remove('hidden');

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
                    const ToolRow = addToolRow();
                    list.appendChild(ToolRow);

                    saveBtn.classList.remove('hidden');


                };

                saveBtn.onclick = async function() {
                    const formData = new FormData();

                    document.querySelectorAll('#tools-list > div').forEach((card, index) => {
                        const logoInput = card.querySelector('.logo-input');

                        formData.append(
                            `tools[${index}][id]`,
                            card.querySelector('.tool-id')?.value || ""
                        );

                        formData.append(
                            `tools[${index}][logo]`,
                            card.querySelector('.tool-logo')?.value || ""
                        );
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
                    const projectRow = addProjectRow();
                    list.appendChild(projectRow);
                    saveBtn.classList.remove('hidden');

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
                    const profileLinkRow = addProfileLinkRow();
                    list.appendChild(profileLinkRow);
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

        async function getportfolio() {
            const data = await apiCall({
                mode: "GET",
                url: "/api/portfolio"
            });
            console.log(data);
            updateinfo(data);

            function updateinfo(data) {

                //extract all data first
                const headline = data.user_info?.Headline?.[0] || null;
                const contact = data.user_info?.Contacts?.[0] || null;

                const skills = data.Skills || [];
                const tools = data.Tools || [];
                const projects = data.Projects || [];

                //update headline
                if (headline) {

                    document.getElementById('headline-main').value = headline.main || '';
                    document.getElementById('headline-sub').value = headline.sub || '';
                    document.getElementById('headline-cta').value = headline.cta || '';
                    document.getElementById('bg-text').value = headline.background || '';
                }
                //update contact

                //contact
                if (contact) {

                    document.getElementById('contact-email').value = contact.email || '';
                    document.getElementById('contact-phone').value = contact.phone || '';

                    // console.log(contact.social_links);

                    //foreach profile links
                    if (contact.social_links) {

                        const list = document.getElementById('social-list');
                        console.log("social links available");
                        contact.social_links.forEach(links => {

                            const profileLinkRow = addProfileLinkRow(links);
                            list.appendChild(profileLinkRow);

                        });
                    }
                }


                //foreach skills.
                if (skills) {

                    const list = document.getElementById('skills-list');
                    skills.forEach(skill => {

                        const skillrow = addSkillRow(skill);
                        list.appendChild(skillrow);
                    });
                }

                //foreach tools
                if (tools) {

                    const list = document.getElementById('tools-list');
                    tools.forEach(tool => {

                        const toolRow = addToolRow(tool);
                        list.appendChild(toolRow);
                    });
                }

                //foreach projects
                if (projects) {

                    const list = document.getElementById('projects-list');
                    projects.forEach(project => {

                        const projectRow = addProjectRow(project);
                        list.appendChild(projectRow);

                    });
                }
            }
            document.getElementById("mainContainer").classList.remove("hidden");
            document.getElementById("loaderContainer").classList.add("hidden");

        }
        getportfolio();
    })();
</script>
