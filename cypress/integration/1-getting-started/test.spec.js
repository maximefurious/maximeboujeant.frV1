describe('Test du site maximeboujeant.fr', () => {
    it('Site en ligne ', () => {
        cy.visit('https://maximeboujeant.fr/')
        cy.get('#wrapper').contains('CV')
        cy.get('#wrapper').contains('Contact')
        cy.get('#wrapper').contains('Projets')
        cy.get('#wrapper').contains('Skill')
        cy.get('#wrapper').contains('Formation')
        cy.get('#wrapper').contains('Profil')
        cy.get('#wrapper').contains('Experience')
    });
});