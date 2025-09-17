import { Tabs } from "flowbite";
const tabsElementService = document.getElementById("tabs-example");

// create an array of objects with the id, trigger element (eg. button), and the content element
const tabElementsService = [
    {
        id: "profile",
        triggerEl: document.querySelector("#profile-tab-example"),
        targetEl: document.querySelector("#profile-example"),
    },
    {
        id: "dashboard",
        triggerEl: document.querySelector("#dashboard-tab-example"),
        targetEl: document.querySelector("#dashboard-example"),
    },
    {
        id: "settings",
        triggerEl: document.querySelector("#settings-tab-example"),
        targetEl: document.querySelector("#settings-example"),
    },
    {
        id: "contacts",
        triggerEl: document.querySelector("#contacts-tab-example"),
        targetEl: document.querySelector("#contacts-example"),
    },
];

// options with default values
const options = {
    defaultTabId: "profile",
    activeClasses: "text-white hover:text-grey-600 border-gold bg-gold",
    inactiveClasses:
        "text-gray-500 hover:text-gray-600 border-black hover:border-gray-300",
};

// instance options with default values
const instanceOptionsSerices = {
    id: "tabs-example",
    override: true,
};

// create a new Tabs instance
const tabsService = new Tabs(
    tabsElementService,
    tabElementsService,
    options,
    instanceOptionsSerices
);

const tabElementsIso = document.getElementById("tabs-iso");

const tabElementIso = [
    {
        id: "iso-9001",
        triggerEl: document.querySelector("#iso-9001-tab"),
        targetEl: document.querySelector("#iso-9001"),
    },
    {
        id: "iso-14001",
        triggerEl: document.querySelector("#iso-14001-tab"),
        targetEl: document.querySelector("#iso-14001"),
    },
    {
        id: "iso-45001",
        triggerEl: document.querySelector("#iso-45001-tab"),
        targetEl: document.querySelector("#iso-45001"),
    },
    {
        id: "iso-22000",
        triggerEl: document.querySelector("#iso-22000-tab"),
        targetEl: document.querySelector("#iso-22000"),
    },
    {
        id: "iso-18001",
        triggerEl: document.querySelector("#iso-18001-tab"),
        targetEl: document.querySelector("#iso-18001"),
    },
];

const optionIso = {
    defaultTabId: "iso-9001",
    activeClasses: "text-white hover:text-grey-600 border-gold bg-gold",
    inactiveClasses:
        "text-gray-500 hover:text-gray-600 border-black hover:border-gray-300",
};

const instanceOptionsIso = {
    id: "tabs-iso",
    override: true,
};

const tabsIso = new Tabs(
    tabElementsIso,
    tabElementIso,
    optionIso,
    instanceOptionsIso
);
