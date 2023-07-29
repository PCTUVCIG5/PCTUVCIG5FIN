

--
-- Contraintes pour la table `amenagements`
--
ALTER TABLE `amenagements`
  ADD CONSTRAINT `amenagements_habitant_id_foreign` FOREIGN KEY (`habitant_id`) REFERENCES `habitants` (`id`);

--
-- Contraintes pour la table `centre_interets`
--
ALTER TABLE `centre_interets`
  ADD CONSTRAINT `centre_interets_habitant_id_foreign` FOREIGN KEY (`habitant_id`) REFERENCES `habitants` (`id`);

--
-- Contraintes pour la table `deces`
--
ALTER TABLE `deces`
  ADD CONSTRAINT `deces_habitant_id_foreign` FOREIGN KEY (`habitant_id`) REFERENCES `habitants` (`id`);

--
-- Contraintes pour la table `demande_emplois`
--
ALTER TABLE `demande_emplois`
  ADD CONSTRAINT `demande_emplois_habitant_id_foreign` FOREIGN KEY (`habitant_id`) REFERENCES `habitants` (`id`),
  ADD CONSTRAINT `demande_emplois_offre_emploi_id_foreign` FOREIGN KEY (`offre_emploi_id`) REFERENCES `offre_emplois` (`id`);

--
-- Contraintes pour la table `demenagements`
--
ALTER TABLE `demenagements`
  ADD CONSTRAINT `demenagements_habitant_id_foreign` FOREIGN KEY (`habitant_id`) REFERENCES `habitants` (`id`);

--
-- Contraintes pour la table `divoces`
--
ALTER TABLE `divoces`
  ADD CONSTRAINT `divoces_femme_id_foreign` FOREIGN KEY (`femme_id`) REFERENCES `femmes` (`id`),
  ADD CONSTRAINT `divoces_homme_id_foreign` FOREIGN KEY (`homme_id`) REFERENCES `hommes` (`id`);

--
-- Contraintes pour la table `femmes`
--
ALTER TABLE `femmes`
  ADD CONSTRAINT `femmes_habitant_id_foreign` FOREIGN KEY (`habitant_id`) REFERENCES `habitants` (`id`);

--
-- Contraintes pour la table `hommes`
--
ALTER TABLE `hommes`
  ADD CONSTRAINT `hommes_habitant_id_foreign` FOREIGN KEY (`habitant_id`) REFERENCES `habitants` (`id`);

--
-- Contraintes pour la table `mariages`
--
ALTER TABLE `mariages`
  ADD CONSTRAINT `mariages_femme_id_foreign` FOREIGN KEY (`femme_id`) REFERENCES `femmes` (`id`),
  ADD CONSTRAINT `mariages_homme_id_foreign` FOREIGN KEY (`homme_id`) REFERENCES `hommes` (`id`);

--
-- Contraintes pour la table `naissances`
--
ALTER TABLE `naissances`
  ADD CONSTRAINT `naissances_femme_id_foreign` FOREIGN KEY (`femme_id`) REFERENCES `femmes` (`id`),
  ADD CONSTRAINT `naissances_homme_id_foreign` FOREIGN KEY (`homme_id`) REFERENCES `hommes` (`id`);

--
-- Contraintes pour la table `ref_metiers`
--
ALTER TABLE `ref_metiers`
  ADD CONSTRAINT `ref_metiers_habitant_id_foreign` FOREIGN KEY (`habitant_id`) REFERENCES `habitants` (`id`),
  ADD CONSTRAINT `ref_metiers_metier_id_foreign` FOREIGN KEY (`metier_id`) REFERENCES `metiers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
