<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio CMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600&family=DM+Mono:wght@400;500&display=swap"
        rel="stylesheet" />
    <style>
        body {
            font-family: 'DM Sans', sans-serif;
        }

        .mono {
            font-family: 'DM Mono', monospace;
        }

        input,
        textarea,
        select {
            background: transparent;
            transition: border-color 0.15s;
        }

        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
        }

        .section-card {
            border-radius: 14px;
            transition: box-shadow 0.2s;
        }

        .tag-chip {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 3px 10px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 500;
        }

        .modal-overlay {
            position: fixed;
            inset: 0;
            z-index: 50;
            background: rgba(0, 0, 0, 0.45);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-box {
            max-height: 90vh;
            overflow-y: auto;
            width: min(680px, 95vw);
            border-radius: 16px;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 9999px;
        }

        .dark ::-webkit-scrollbar-thumb {
            background: #334155;
        }

        .photo-slot {
            aspect-ratio: 1;
            cursor: pointer;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .photo-slot input[type=file] {
            position: absolute;
            inset: 0;
            opacity: 0;
            cursor: pointer;
        }

        .save-btn {
            background: #0f172a;
            color: #f8fafc;
            border-radius: 10px;
            padding: 8px 22px;
            font-size: 14px;
            font-weight: 500;
            transition: background 0.15s, transform 0.1s;
        }

        .dark .save-btn {
            background: #f1f5f9;
            color: #0f172a;
        }

        .save-btn:hover {
            background: #1e293b;
        }

        .dark .save-btn:hover {
            background: #e2e8f0;
        }

        .save-btn:active {
            transform: scale(0.97);
        }

        .add-btn {
            border: 1.5px dashed #94a3b8;
            color: #64748b;
            background: transparent;
            border-radius: 10px;
            padding: 8px 18px;
            font-size: 13px;
            font-weight: 500;
            transition: all 0.15s;
        }

        .add-btn:hover {
            border-color: #475569;
            color: #334155;
            background: #f8fafc;
        }

        .dark .add-btn:hover {
            background: #1e293b;
            color: #cbd5e1;
        }

        .item-card {
            border-radius: 12px;
            border: 1px solid;
            transition: border-color 0.15s;
        }

        .light-border {
            border-color: #e2e8f0;
        }

        .dark .light-border {
            border-color: #1e293b;
        }

        .field-input {
            width: 100%;
            border: 1px solid #e2e8f0;
            border-radius: 9px;
            padding: 9px 13px;
            font-size: 14px;
            font-family: 'DM Sans', sans-serif;
            background: #f8fafc;
            color: #0f172a;
        }

        .dark .field-input {
            border-color: #1e293b;
            background: #0f172a;
            color: #f1f5f9;
        }

        .field-input:focus {
            border-color: #94a3b8;
        }

        .dark .field-input:focus {
            border-color: #475569;
        }

        .field-label {
            font-size: 12px;
            font-weight: 500;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 6px;
            display: block;
        }

        .dark .field-label {
            color: #94a3b8;
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: #0f172a;
        }

        .dark .section-title {
            color: #f1f5f9;
        }

        .section-desc {
            font-size: 13px;
            color: #64748b;
            margin-top: 2px;
        }

        .dark .section-desc {
            color: #94a3b8;
        }

        .remove-btn {
            font-size: 12px;
            color: #94a3b8;
            background: none;
            border: none;
            cursor: pointer;
            padding: 2px 6px;
            border-radius: 6px;
            transition: color 0.15s, background 0.15s;
        }

        .remove-btn:hover {
            color: #ef4444;
            background: #fee2e2;
        }

        .dark .remove-btn:hover {
            background: #450a0a;
            color: #fca5a5;
        }
    </style>
</head>

<body
    class="bg-slate-50 dark:bg-slate-950 text-slate-900 dark:text-slate-100 min-h-screen transition-colors duration-200">

    <!-- DARK MODE TOGGLE -->
    <div class="fixed top-4 right-5 z-40">
        <button id="themeToggle"
            class="w-9 h-9 rounded-full flex items-center justify-center bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 shadow-sm text-lg transition-all hover:scale-105">
            <span id="themeIcon">🌙</span>
        </button>
    </div>

    <div id="cms-root" class="max-w-3xl mx-auto px-4 py-10 space-y-6">

        <!-- HEADER -->
        <div class="mb-2">
            <p class="mono text-xs text-slate-400 dark:text-slate-500 mb-1">portfolio /</p>
            <h1 class="text-3xl font-semibold text-slate-900 dark:text-white tracking-tight">Content Manager</h1>
            <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Customize what visitors see on your portfolio.
            </p>
        </div>

        <!-- ── 1. HEADLINE ─────────────────────────────────────────────── -->
        <div
            class="section-card bg-white dark:bg-slate-900 p-6 shadow-sm border border-slate-100 dark:border-slate-800">
            <div class="flex items-start justify-between mb-5">
                <div>
                    <h2 class="section-title">Headline</h2>
                    <p class="section-desc">The first thing visitors read on your hero section.</p>
                </div>
                <button class="save-btn" onclick="CMS.saveHeadline()">Save</button>
            </div>
            <div class="space-y-4">
                <div>
                    <label class="field-label">Main headline</label>
                    <input id="hl-main" type="text" class="field-input"
                        placeholder="e.g. Building things that matter." />
                </div>
                <div>
                    <label class="field-label">Sub-headline</label>
                    <input id="hl-sub" type="text" class="field-input"
                        placeholder="e.g. I'm a designer & developer based in Manila." />
                </div>
                <div>
                    <label class="field-label">CTA button label (optional)</label>
                    <input id="hl-cta" type="text" class="field-input" placeholder="e.g. See my work" />
                </div>
            </div>
        </div>

        <!-- ── 2. BACKGROUND ───────────────────────────────────────────── -->
        <div
            class="section-card bg-white dark:bg-slate-900 p-6 shadow-sm border border-slate-100 dark:border-slate-800">
            <div class="flex items-start justify-between mb-5">
                <div>
                    <h2 class="section-title">Background</h2>
                    <p class="section-desc">Insights about you — past projects, expertise, philosophy, anything.</p>
                </div>
                <button class="save-btn" onclick="CMS.saveBackground()">Save</button>
            </div>
            <div id="bg-list" class="space-y-3"></div>
            <button class="add-btn mt-4 w-full" onclick="CMS.addBackground()">+ Add background entry</button>
        </div>

        <!-- ── 3. SKILLS ───────────────────────────────────────────────── -->
        <div
            class="section-card bg-white dark:bg-slate-900 p-6 shadow-sm border border-slate-100 dark:border-slate-800">
            <div class="flex items-start justify-between mb-5">
                <div>
                    <h2 class="section-title">Skills</h2>
                    <p class="section-desc">List your professional skills with context.</p>
                </div>
                <button class="save-btn" onclick="CMS.saveSkills()">Save</button>
            </div>
            <div id="skills-list" class="space-y-3"></div>
            <button class="add-btn mt-4 w-full" onclick="CMS.addSkill()">+ Add skill</button>
        </div>

        <!-- ── 4. TOOLS ────────────────────────────────────────────────── -->
        <div
            class="section-card bg-white dark:bg-slate-900 p-6 shadow-sm border border-slate-100 dark:border-slate-800">
            <div class="flex items-start justify-between mb-5">
                <div>
                    <h2 class="section-title">Tools</h2>
                    <p class="section-desc">Software, platforms, and tools in your arsenal.</p>
                </div>
                <button class="save-btn" onclick="CMS.saveTools()">Save</button>
            </div>
            <div id="tools-list" class="space-y-3"></div>
            <button class="add-btn mt-4 w-full" onclick="CMS.addTool()">+ Add tool</button>
        </div>

        <!-- ── 5. FEATURED PROJECTS ───────────────────────────────────── -->
        <div
            class="section-card bg-white dark:bg-slate-900 p-6 shadow-sm border border-slate-100 dark:border-slate-800">
            <div class="flex items-start justify-between mb-5">
                <div>
                    <h2 class="section-title">Featured Projects</h2>
                    <p class="section-desc">Showcase your best work.</p>
                </div>
                <button class="save-btn" onclick="CMS.saveProjects()">Save</button>
            </div>
            <div id="projects-list" class="grid grid-cols-1 sm:grid-cols-2 gap-3"></div>
            <button class="add-btn mt-4 w-full" onclick="CMS.openProjectModal()">+ Add project</button>
        </div>

        <!-- ── 6. CONTACT ─────────────────────────────────────────────── -->
        <div
            class="section-card bg-white dark:bg-slate-900 p-6 shadow-sm border border-slate-100 dark:border-slate-800">
            <div class="flex items-start justify-between mb-5">
                <div>
                    <h2 class="section-title">Contact Details</h2>
                    <p class="section-desc">How visitors can reach you.</p>
                </div>
                <button class="save-btn" onclick="CMS.saveContact()">Save</button>
            </div>
            <div class="space-y-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="field-label">Email</label>
                        <input id="contact-email" type="email" class="field-input" placeholder="you@example.com" />
                    </div>
                    <div>
                        <label class="field-label">Contact number</label>
                        <input id="contact-phone" type="tel" class="field-input" placeholder="+63 912 345 6789" />
                    </div>
                </div>
                <div>
                    <label class="field-label">Social media links</label>
                    <div id="socials-list" class="space-y-2"></div>
                    <button class="add-btn mt-3 w-full" onclick="CMS.addSocial()">+ Add social link</button>
                </div>
            </div>
        </div>

        <div class="h-10"></div>
    </div>

    <!-- ── PROJECT MODAL ─────────────────────────────────────────────── -->
    <div id="project-modal" class="modal-overlay hidden" onclick="CMS.closeModalOnOverlay(event)">
        <div class="modal-box bg-white dark:bg-slate-900 shadow-xl p-6">
            <div class="flex items-center justify-between mb-5">
                <h3 class="text-lg font-semibold text-slate-900 dark:text-white" id="modal-title-label">Add project
                </h3>
                <button onclick="CMS.closeProjectModal()"
                    class="text-slate-400 hover:text-slate-700 dark:hover:text-white text-xl leading-none">×</button>
            </div>

            <div class="space-y-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="field-label">Project title</label>
                        <input id="pm-title" type="text" class="field-input" placeholder="My Awesome Project" />
                    </div>
                    <div>
                        <label class="field-label">Duration</label>
                        <input id="pm-duration" type="text" class="field-input"
                            placeholder="e.g. Jan 2024 – Mar 2024" />
                    </div>
                </div>

                <div>
                    <label class="field-label">Description</label>
                    <textarea id="pm-desc" class="field-input resize-none" rows="3" placeholder="What this project is about..."></textarea>
                </div>

                <div>
                    <label class="field-label">Link URL</label>
                    <input id="pm-url" type="url" class="field-input" placeholder="https://..." />
                </div>

                <div>
                    <label class="field-label">Link type</label>
                    <select id="pm-urltype" class="field-input">
                        <option value="">— Select type —</option>
                        <option value="video">Video link</option>
                        <option value="website">Website link</option>
                        <option value="drive">Drive link</option>
                    </select>
                </div>

                <div>
                    <label class="field-label">Photos <span class="normal-case font-normal text-slate-400">(max
                            6)</span></label>
                    <div id="photo-grid" class="grid grid-cols-3 gap-2"></div>
                </div>

                <div>
                    <label class="field-label">Skills used</label>
                    <div id="pm-skills-options" class="flex flex-wrap gap-2"></div>
                    <p class="text-xs text-slate-400 mt-2">Skills are pulled from the Skills section above.</p>
                </div>

                <div class="flex justify-end gap-3 pt-2">
                    <button onclick="CMS.closeProjectModal()" class="add-btn px-5">Cancel</button>
                    <button onclick="CMS.saveProject()" class="save-btn">Save project</button>
                </div>
            </div>
        </div>
    </div>

    <!-- TOAST -->
    <div id="toast" class="fixed bottom-6 left-1/2 -translate-x-1/2 z-50 hidden">
        <div
            class="bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 text-sm font-medium px-5 py-2.5 rounded-full shadow-lg mono">
            <span id="toast-msg"></span>
        </div>
    </div>

    <script>
        (function() {
            'use strict';

            const store = {
                headline: {
                    main: '',
                    sub: '',
                    cta: ''
                },
                background: [],
                skills: [],
                tools: [],
                projects: [],
                contact: {
                    email: '',
                    phone: '',
                    socials: []
                }
            };

            let editingProjectIndex = null;
            let selectedSkillsForProject = [];
            let projectPhotos = [];

            function uid() {
                return Math.random().toString(36).slice(2, 8);
            }

            function toast(msg) {
                const t = document.getElementById('toast');
                document.getElementById('toast-msg').textContent = msg;
                t.classList.remove('hidden');
                clearTimeout(t._tid);
                t._tid = setTimeout(() => t.classList.add('hidden'), 2400);
            }

            function el(tag, cls, html) {
                const e = document.createElement(tag);
                if (cls) e.className = cls;
                if (html !== undefined) e.innerHTML = html;
                return e;
            }

            function fieldInput(placeholder, value = '', type = 'text') {
                const i = document.createElement('input');
                i.type = type;
                i.className = 'field-input flex-1';
                i.placeholder = placeholder;
                i.value = value;
                return i;
            }

            function fieldTextarea(placeholder, value = '', rows = 2) {
                const t = document.createElement('textarea');
                t.className = 'field-input w-full resize-none';
                t.placeholder = placeholder;
                t.value = value;
                t.rows = rows;
                return t;
            }

            // ── BACKGROUND ────────────────────────────────────────────────────
            function renderBackground() {
                const list = document.getElementById('bg-list');
                list.innerHTML = '';
                store.background.forEach((item, i) => {
                    const card = el('div',
                        'item-card light-border bg-slate-50 dark:bg-slate-800/40 p-4 space-y-3');
                    card.dataset.id = item.id;

                    const row1 = el('div', 'flex items-center gap-2');
                    const titleIn = fieldInput('Entry title', item.title);
                    titleIn.dataset.field = 'title';
                    const remove = el('button', 'remove-btn shrink-0', '✕ Remove');
                    remove.onclick = () => {
                        store.background.splice(i, 1);
                        renderBackground();
                    };
                    row1.append(titleIn, remove);

                    const bodyIn = fieldTextarea('Details / insights...', item.body);
                    bodyIn.dataset.field = 'body';

                    card.append(row1, bodyIn);

                    titleIn.addEventListener('input', e => {
                        store.background[i].title = e.target.value;
                    });
                    bodyIn.addEventListener('input', e => {
                        store.background[i].body = e.target.value;
                    });

                    list.appendChild(card);
                });
            }

            function addBackground() {
                store.background.push({
                    id: uid(),
                    title: '',
                    body: ''
                });
                renderBackground();
                const cards = document.querySelectorAll('#bg-list .item-card');
                if (cards.length) cards[cards.length - 1].querySelector('input').focus();
            }

            function saveBackground() {
                console.log('[CMS] Background:', JSON.parse(JSON.stringify(store.background)));
                toast('Background saved ✓');
            }

            // ── SKILLS ────────────────────────────────────────────────────────
            function renderSkills() {
                const list = document.getElementById('skills-list');
                list.innerHTML = '';
                store.skills.forEach((item, i) => {
                    const card = el('div',
                        'item-card light-border bg-slate-50 dark:bg-slate-800/40 p-4 space-y-3');
                    card.dataset.id = item.id;

                    const topRow = el('div', 'flex items-center gap-2');
                    const titleIn = fieldInput('Skill title', item.title);
                    const remove = el('button', 'remove-btn shrink-0', '✕ Remove');
                    remove.onclick = () => {
                        store.skills.splice(i, 1);
                        renderSkills();
                        refreshProjectSkills();
                    };
                    topRow.append(titleIn, remove);

                    const descIn = fieldTextarea('Skill description', item.desc);
                    const notesIn = fieldInput('Other notes', item.notes);
                    const yoeIn = fieldInput('Years of experience', item.yoe, 'number');
                    yoeIn.min = 0;
                    yoeIn.max = 50;
                    yoeIn.style.width = '160px';

                    const bottomRow = el('div', 'flex gap-2');
                    bottomRow.append(yoeIn);
                    const yoeLabel = el('span', 'text-xs text-slate-400 dark:text-slate-500 self-end pb-2',
                        'yrs exp');
                    bottomRow.append(yoeLabel);

                    titleIn.addEventListener('input', e => {
                        store.skills[i].title = e.target.value;
                        refreshProjectSkills();
                    });
                    descIn.addEventListener('input', e => {
                        store.skills[i].desc = e.target.value;
                    });
                    notesIn.addEventListener('input', e => {
                        store.skills[i].notes = e.target.value;
                    });
                    yoeIn.addEventListener('input', e => {
                        store.skills[i].yoe = e.target.value;
                    });

                    card.append(topRow, descIn, notesIn, bottomRow);
                    list.appendChild(card);
                });
            }

            function addSkill() {
                store.skills.push({
                    id: uid(),
                    title: '',
                    desc: '',
                    notes: '',
                    yoe: ''
                });
                renderSkills();
                refreshProjectSkills();
                const cards = document.querySelectorAll('#skills-list .item-card');
                if (cards.length) cards[cards.length - 1].querySelector('input').focus();
            }

            function saveSkills() {
                console.log('[CMS] Skills:', JSON.parse(JSON.stringify(store.skills)));
                toast('Skills saved ✓');
            }

            // ── TOOLS ─────────────────────────────────────────────────────────
            function renderTools() {
                const list = document.getElementById('tools-list');
                list.innerHTML = '';
                store.tools.forEach((item, i) => {
                    const card = el('div',
                        'item-card light-border bg-slate-50 dark:bg-slate-800/40 p-4 space-y-3');
                    card.dataset.id = item.id;

                    const topRow = el('div', 'flex items-center gap-2');
                    const titleIn = fieldInput('Tool name', item.title);
                    const remove = el('button', 'remove-btn shrink-0', '✕ Remove');
                    remove.onclick = () => {
                        store.tools.splice(i, 1);
                        renderTools();
                    };
                    topRow.append(titleIn, remove);

                    const descIn = fieldTextarea('Tool description', item.desc);
                    const yoeIn = fieldInput('Years of experience', item.yoe, 'number');
                    yoeIn.min = 0;
                    yoeIn.max = 50;
                    yoeIn.style.width = '160px';

                    const bottomRow = el('div', 'flex gap-2');
                    bottomRow.append(yoeIn);
                    const yoeLabel = el('span', 'text-xs text-slate-400 dark:text-slate-500 self-end pb-2',
                        'yrs exp');
                    bottomRow.append(yoeLabel);

                    titleIn.addEventListener('input', e => {
                        store.tools[i].title = e.target.value;
                    });
                    descIn.addEventListener('input', e => {
                        store.tools[i].desc = e.target.value;
                    });
                    yoeIn.addEventListener('input', e => {
                        store.tools[i].yoe = e.target.value;
                    });

                    card.append(topRow, descIn, bottomRow);
                    list.appendChild(card);
                });
            }

            function addTool() {
                store.tools.push({
                    id: uid(),
                    title: '',
                    desc: '',
                    yoe: ''
                });
                renderTools();
                const cards = document.querySelectorAll('#tools-list .item-card');
                if (cards.length) cards[cards.length - 1].querySelector('input').focus();
            }

            function saveTools() {
                console.log('[CMS] Tools:', JSON.parse(JSON.stringify(store.tools)));
                toast('Tools saved ✓');
            }

            // ── PROJECTS ──────────────────────────────────────────────────────
            function renderProjects() {
                const list = document.getElementById('projects-list');
                list.innerHTML = '';
                if (store.projects.length === 0) {
                    list.innerHTML =
                        '<p class="text-sm text-slate-400 dark:text-slate-500 col-span-2 py-2">No projects yet. Click below to add one.</p>';
                    return;
                }
                store.projects.forEach((p, i) => {
                    const card = el('div',
                        'item-card light-border bg-slate-50 dark:bg-slate-800/40 p-4 flex flex-col gap-2');
                    const topRow = el('div', 'flex items-start justify-between gap-2');
                    const info = el('div');
                    const titleEl = el('p', 'font-semibold text-sm text-slate-800 dark:text-slate-100', p
                        .title || 'Untitled project');
                    const durEl = el('p', 'text-xs text-slate-400 dark:text-slate-500 mt-0.5', p.duration ||
                        '');
                    info.append(titleEl, durEl);
                    const actions = el('div', 'flex gap-1 shrink-0');
                    const editBtn = el('button',
                        'text-xs text-slate-400 hover:text-slate-700 dark:hover:text-white px-2 py-1 rounded-md hover:bg-slate-100 dark:hover:bg-slate-700 transition-colors',
                        'Edit');
                    editBtn.onclick = () => openProjectModal(i);
                    const delBtn = el('button',
                        'text-xs text-slate-400 hover:text-red-500 px-2 py-1 rounded-md hover:bg-red-50 dark:hover:bg-red-950 transition-colors',
                        'Delete');
                    delBtn.onclick = () => {
                        store.projects.splice(i, 1);
                        renderProjects();
                    };
                    actions.append(editBtn, delBtn);
                    topRow.append(info, actions);
                    const skills = el('div', 'flex flex-wrap gap-1');
                    (p.skills || []).forEach(s => {
                        const chip = el('span',
                            'tag-chip bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300',
                            s);
                        skills.appendChild(chip);
                    });
                    if (p.urlType) {
                        const badge = el('span',
                            'tag-chip bg-blue-50 dark:bg-blue-950 text-blue-600 dark:text-blue-300', p
                            .urlType);
                        skills.appendChild(badge);
                    }
                    card.append(topRow, skills);
                    list.appendChild(card);
                });
            }

            function refreshProjectSkills() {
                const container = document.getElementById('pm-skills-options');
                if (!container) return;
                container.innerHTML = '';
                store.skills.forEach(s => {
                    if (!s.title) return;
                    const isSelected = selectedSkillsForProject.includes(s.title);
                    const btn = el('button',
                        `tag-chip cursor-pointer select-none transition-all ${isSelected ? 'bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900' : 'bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700'}`,
                        s.title);
                    btn.onclick = () => {
                        if (selectedSkillsForProject.includes(s.title)) {
                            selectedSkillsForProject = selectedSkillsForProject.filter(x => x !== s.title);
                        } else {
                            selectedSkillsForProject.push(s.title);
                        }
                        refreshProjectSkills();
                    };
                    container.appendChild(btn);
                });
                if (store.skills.filter(s => s.title).length === 0) {
                    container.innerHTML =
                        '<p class="text-xs text-slate-400">No skills added yet. Go to the Skills section first.</p>';
                }
            }

            function buildPhotoGrid() {
                const grid = document.getElementById('photo-grid');
                grid.innerHTML = '';
                for (let i = 0; i < 6; i++) {
                    const slot = el('div',
                        'photo-slot flex items-center justify-center border-2 border-dashed border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-400 text-xs text-center'
                    );
                    if (projectPhotos[i]) {
                        const img = document.createElement('img');
                        img.src = projectPhotos[i];
                        img.className = 'w-full h-full object-cover';
                        slot.appendChild(img);
                    } else {
                        slot.innerHTML =
                            `<div class="pointer-events-none text-center"><div class="text-2xl mb-1 opacity-40">+</div><div class="text-xs text-slate-400">Photo ${i + 1}</div></div>`;
                    }
                    const fileIn = document.createElement('input');
                    fileIn.type = 'file';
                    fileIn.accept = 'image/*';
                    const idx = i;
                    fileIn.addEventListener('change', e => {
                        const file = e.target.files[0];
                        if (!file) return;
                        const reader = new FileReader();
                        reader.onload = ev => {
                            projectPhotos[idx] = ev.target.result;
                            buildPhotoGrid();
                        };
                        reader.readAsDataURL(file);
                    });
                    slot.appendChild(fileIn);
                    grid.appendChild(slot);
                }
            }

            function openProjectModal(idx) {
                editingProjectIndex = idx !== undefined ? idx : null;
                selectedSkillsForProject = [];
                projectPhotos = [];

                const label = document.getElementById('modal-title-label');
                label.textContent = editingProjectIndex !== null ? 'Edit project' : 'Add project';

                if (editingProjectIndex !== null) {
                    const p = store.projects[editingProjectIndex];
                    document.getElementById('pm-title').value = p.title || '';
                    document.getElementById('pm-duration').value = p.duration || '';
                    document.getElementById('pm-desc').value = p.desc || '';
                    document.getElementById('pm-url').value = p.url || '';
                    document.getElementById('pm-urltype').value = p.urlType || '';
                    selectedSkillsForProject = [...(p.skills || [])];
                    projectPhotos = [...(p.photos || [])];
                } else {
                    document.getElementById('pm-title').value = '';
                    document.getElementById('pm-duration').value = '';
                    document.getElementById('pm-desc').value = '';
                    document.getElementById('pm-url').value = '';
                    document.getElementById('pm-urltype').value = '';
                }

                buildPhotoGrid();
                refreshProjectSkills();
                document.getElementById('project-modal').classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }

            function closeProjectModal() {
                document.getElementById('project-modal').classList.add('hidden');
                document.body.style.overflow = '';
            }

            function closeModalOnOverlay(e) {
                if (e.target === document.getElementById('project-modal')) closeProjectModal();
            }

            function saveProject() {
                const title = document.getElementById('pm-title').value.trim();
                if (!title) {
                    toast('Please enter a project title.');
                    return;
                }

                const project = {
                    id: editingProjectIndex !== null ? store.projects[editingProjectIndex].id : uid(),
                    title,
                    duration: document.getElementById('pm-duration').value.trim(),
                    desc: document.getElementById('pm-desc').value.trim(),
                    url: document.getElementById('pm-url').value.trim(),
                    urlType: document.getElementById('pm-urltype').value,
                    photos: [...projectPhotos],
                    skills: [...selectedSkillsForProject]
                };

                if (editingProjectIndex !== null) {
                    store.projects[editingProjectIndex] = project;
                } else {
                    store.projects.push(project);
                }

                renderProjects();
                closeProjectModal();
                toast(editingProjectIndex !== null ? 'Project updated ✓' : 'Project added ✓');
            }

            function saveProjects() {
                console.log('[CMS] Projects:', JSON.parse(JSON.stringify(store.projects)));
                toast('Projects saved ✓');
            }

            // ── CONTACT ───────────────────────────────────────────────────────
            const SOCIAL_PLATFORMS = ['GitHub', 'LinkedIn', 'Twitter/X', 'Instagram', 'Facebook', 'YouTube', 'Dribbble',
                'Behance', 'TikTok', 'Discord', 'Other'
            ];

            function renderSocials() {
                const list = document.getElementById('socials-list');
                list.innerHTML = '';
                store.contact.socials.forEach((s, i) => {
                    const row = el('div', 'flex items-center gap-2');

                    const sel = document.createElement('select');
                    sel.className = 'field-input';
                    sel.style.width = '150px';
                    SOCIAL_PLATFORMS.forEach(p => {
                        const opt = document.createElement('option');
                        opt.value = p;
                        opt.textContent = p;
                        if (s.platform === p) opt.selected = true;
                        sel.appendChild(opt);
                    });
                    sel.addEventListener('change', e => {
                        store.contact.socials[i].platform = e.target.value;
                    });

                    const urlIn = fieldInput('Profile URL', s.url);
                    urlIn.type = 'url';
                    urlIn.style.flex = '1';

                    const remove = el('button', 'remove-btn shrink-0', '✕');
                    remove.onclick = () => {
                        store.contact.socials.splice(i, 1);
                        renderSocials();
                    };

                    urlIn.addEventListener('input', e => {
                        store.contact.socials[i].url = e.target.value;
                    });

                    row.append(sel, urlIn, remove);
                    list.appendChild(row);
                });
            }

            function addSocial() {
                store.contact.socials.push({
                    platform: 'GitHub',
                    url: ''
                });
                renderSocials();
            }

            function saveContact() {
                store.contact.email = document.getElementById('contact-email').value.trim();
                store.contact.phone = document.getElementById('contact-phone').value.trim();
                console.log('[CMS] Contact:', JSON.parse(JSON.stringify(store.contact)));
                toast('Contact saved ✓');
            }

            // ── HEADLINE SAVE ─────────────────────────────────────────────────
            function saveHeadline() {
                store.headline.main = document.getElementById('hl-main').value.trim();
                store.headline.sub = document.getElementById('hl-sub').value.trim();
                store.headline.cta = document.getElementById('hl-cta').value.trim();
                console.log('[CMS] Headline:', JSON.parse(JSON.stringify(store.headline)));
                toast('Headline saved ✓');
            }

            // ── THEME TOGGLE ─────────────────────────────────────────────────
            function initTheme() {
                const html = document.documentElement;
                const btn = document.getElementById('themeToggle');
                const icon = document.getElementById('themeIcon');
                const isDark = () => html.classList.contains('dark');
                const setIcon = () => {
                    icon.textContent = isDark() ? '☀️' : '🌙';
                };
                setIcon();
                btn.addEventListener('click', () => {
                    html.classList.toggle('dark');
                    setIcon();
                });
            }

            // ── INIT ──────────────────────────────────────────────────────────
            function init() {
                initTheme();
                renderBackground();
                renderSkills();
                renderTools();
                renderProjects();
                renderSocials();
            }

            // ── PUBLIC API ────────────────────────────────────────────────────
            window.CMS = {
                saveHeadline,
                saveBackground,
                addBackground,
                saveSkills,
                addSkill,
                saveTools,
                addTool,
                saveProjects,
                addProject: () => openProjectModal(),
                openProjectModal: () => openProjectModal(),
                closeProjectModal,
                closeModalOnOverlay,
                saveProject,
                saveContact,
                addSocial
            };

            document.addEventListener('DOMContentLoaded', init);
            if (document.readyState !== 'loading') init();
        })();
    </script>
</body>

</html>