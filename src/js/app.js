// Constante des éléments du projet
const navLudo = document.getElementById("nav-ludo");
const navFurious = document.getElementById("nav-furious");
const navKohfrais = document.getElementById("nav-kohfrais");
const navYams = document.getElementById("nav-yams");
const navAdv = document.getElementById("nav-adv");
const navEduq = document.getElementById("nav-eduq");

// Constante des fenetre des éléments du projet
const fenetreEduq = document.getElementById("fenetre-eduq");
const fenetreAdv = document.getElementById("fenetre-adv");
const fenetreLudo = document.getElementById("fenetre-ludo");
const fenetreFurious = document.getElementById("fenetre-furious");
const fenetreYams = document.getElementById("fenetre-yams");
const fenetreKohfrais = document.getElementById("fenetre-kohfrais");

const BoutonRetourProjet = document.getElementById("projet-retour");
const projetNav = document.getElementById("projet-nav");
const projetCorps = document.getElementById("projet-corps");
const projetContainer = document.getElementById("projet-container");
const projetDelimiter = document.getElementById("projet-delimiter");

// Constante des pages des éléments du bureau
const bureau = document.getElementById("bureau");
const cv = document.getElementById("cv");
const exp = document.getElementById("exp");
const proj = document.getElementById("proj");
const skill = document.getElementById("skill");
const moi = document.getElementById("moi");
const mail = document.getElementById("mail");
const formation = document.getElementById("formation");

// Constante pour les éléments de la page profil / moi
const general = document.getElementById("general");
const preference = document.getElementById("preference");
const cgu = document.getElementById("cgu");
const profilContainer = document.getElementById("profil-container");
const profilDelimiter = document.getElementById("profil-delimiter");
const profilNav = document.getElementById("profil-nav");
const BoutonRetour = document.getElementById("btn-retour");
const profilCorps = document.getElementById("profil-corps");

const gene = document.getElementById("para-general");
const pref = document.getElementById("para-preference");
const navcgu = document.getElementById("para-cgu");

const dark = document.getElementById("dark");
const light = document.getElementById("light");
// Fonction initiale qui permet de détecter toutes interactions avec le site internet
function initElement() {
    if (document.body.clientWidth > 500) {
        /* Detection des éléments dans la catégorie PROJET */
        navEduq.onclick = () => apparaitreFenetreProjet(fenetreEduq);
        navAdv.onclick = () => apparaitreFenetreProjet(fenetreAdv);
        navLudo.onclick = () => apparaitreFenetreProjet(fenetreLudo);
        navFurious.onclick = () => apparaitreFenetreProjet(fenetreFurious);
        navYams.onclick = () => apparaitreFenetreProjet(fenetreYams);
        navKohfrais.onclick = () => apparaitreFenetreProjet(fenetreKohfrais);

        /* Détection des éléments dans la catégorie PROFIL */
        gene.onclick = () => apparaitreProfilItems(general);
        pref.onclick = () => apparaitreProfilItems(preference);
        navcgu.onclick = () => apparaitreProfilItems(cgu);
    } else {
        /* Detection des éléments dans la catégorie PROJET */
        navEduq.onclick = () => apparaitreFenetreProjetLight(fenetreEduq);
        navAdv.onclick = () => apparaitreFenetreProjetLight(fenetreAdv);
        navLudo.onclick = () => apparaitreFenetreProjetLight(fenetreLudo);
        navFurious.onclick = () => apparaitreFenetreProjetLight(fenetreFurious);
        navYams.onclick = () => apparaitreFenetreProjetLight(fenetreYams);
        navKohfrais.onclick = () => apparaitreFenetreProjetLight(fenetreKohfrais);
        BoutonRetourProjet.onclick = apparaitreMenuProjet;

        /* Détection des éléments dans la catégorie PROFIL */
        gene.onclick = () => apparaitreProfilItemsLight(general);
        pref.onclick = () => apparaitreProfilItemsLight(preference);
        navcgu.onclick = () => apparaitreProfilItemsLight(cgu);
        BoutonRetour.onclick = apparaitreMenu;
    }

    /* --------------------------------------------- */
    /* Détection des éléments pour les modes visuels */
    /* --------------------------------------------- */

    dark.onclick = () => switchMode("light", "dark");
    light.onclick = () => switchMode("dark", "light");
}

function apparaitreFenetreProjet(fenetre) {
    fenetreEduq.style.display = "none";
    fenetreAdv.style.display = "none";
    fenetreLudo.style.display = "none";
    fenetreFurious.style.display = "none";
    fenetreYams.style.display = "none";
    fenetreKohfrais.style.display = "none";
    fenetre.style.display = "initial";
}

function apparaitreFenetreProjetLight(fenetre) {
    fenetreEduq.style.display = "none";
    fenetreAdv.style.display = "none";
    fenetreLudo.style.display = "none";
    fenetreFurious.style.display = "none";
    fenetreYams.style.display = "none";
    fenetreKohfrais.style.display = "none";
    fenetre.style.display = "initial";

    projetContainer.style.display = "block";
    projetDelimiter.style.display = "block";
    projetNav.style.display = "none";
    BoutonRetourProjet.style.display = "contents";
}

function apparaitreMenuProjet() {
    fenetreEduq.style.display = "none";
    fenetreAdv.style.display = "none";
    fenetreLudo.style.display = "none";
    fenetreFurious.style.display = "none";
    fenetreYams.style.display = "none";
    fenetreKohfrais.style.display = "none";
    projetDelimiter.style.display = "none";
    projetNav.style.display = "flex";
    BoutonRetourProjet.style.display = "none";
}

function apparaitreFenetreBureau(items) {
    bureau.style.display = "none";
    items.style.display = "flex";
}

function fermerFenetre() {
    cv.style.display = "none";
    exp.style.display = "none";
    proj.style.display = "none";
    skill.style.display = "none";
    moi.style.display = "none";
    mail.style.display = "none";
    formation.style.display = "none";
    bureau.style.display = "grid";
}

/* --------------------------------------------------- */
/* Éviter que l'utilisateur ne peut déplacer des images */
/* --------------------------------------------------- */

document.getElementById('wrapper').ondragstart = function() { return false; };

function switchMode(before, after) {
    if (!document.body.hasAttribute(before)) {
        document.body.removeAttribute(after);
        document.body.setAttribute("class", before)
    }
}

function apparaitreProfilItems(items) {
    general.style.display = "none";
    preference.style.display = "none";
    cgu.style.display = "none";
    items.style.display = "block";
}

function apparaitreMenu() {
    general.style.display = "none";
    preference.style.display = "none";
    profilContainer.style.display = "none";
    profilDelimiter.style.display = "none";
    profilNav.style.display = "flex";
    BoutonRetour.style.display = "none";
}

function apparaitreProfilItemsLight(items) {
    general.style.display = "none";
    preference.style.display = "none";
    cgu.style.display = "none";
    profilContainer.style.display = "block";
    profilDelimiter.style.display = "block";
    profilNav.style.display = "none";
    BoutonRetour.style.display = "block";
    items.style.display = "block";

}

// met tous les éléments en dislay none et affiche la page cgu
function apparaitreLegal() {
    fermerFenetre();
    apparaitreFenetreBureau(moi);
    apparaitreProfilItems(cgu);
}

// Loader pour charger le site internet
const loader = document.querySelector('.preloader');

window.addEventListener('load', () => {
    loader.classList.add('fondu-out');
    setTimeout(() => {
        loader.style.display = 'none';
    }, 500);
});

window.addEventListener('resize', () => {
    window.location.reload();
});