<?php
// Version: 2.0; ManageToolbox

$txt['toolbox_title']  = 'Admin Toolbox (Boîte à outils de l\'administrateur)';
$txt['toolbox_run_now'] = 'Démarrer la tâche maintenant';
$txt['lastLoggedIn'] = 'Dernier actif';
$txt['userid'] = 'numéro d\'utilisateur';

$txt['toolbox_recount'] = 'Recompte des messages des utilisateurs';
$txt['toolbox_recount_info'] = 'Utilisez cette fonction si le nombre des messages des utilisateurs nécessite une mise à jour. Cela recomptera tous les messages faits par chaque utilisateur et cela mettra à jour leur total';
$txt['toolbox_stats'] = 'Recalcul des statistiques journalières';
$txt['toolbox_stats_info'] = 'Utilisez cette fonction si vos messages/sujets et statistiques d\'inscription quotidiens nécessitent une mise à jour. Ceci peut être nécessaire si vous n\'enregistriez pas ces statistiques depuis le début, ou si vous avez importé des données d\'un autre système.';
$txt['toolbox_StatsValidate_info'] = 'Des données sont manquantes, vous devez choisir la façon dont la reconstruction des statistiques doit s\'effectuer';
$txt['toolbox_stats_validate'] = 'Confirmez le recalcul des statistiques';
$txt['toolbox_stats_info1'] = 'Cette fonction recalcule la moyenne journalière des messages, des nouveaux sujets et des inscriptions d\'utilisateurs. Ces données sont utilisées par la section concernant l\'historique du forum et la section de statut général.  Reconstruire ces données peut être nécessaire si vous n\'enregistriez pas vos statistiques journalières depuis le début, ou si vous avez importé des données d\'un autre système.';
$txt['toolbox_stats_info2'] = '<strong>***REMARQUE***</strong> Il est vivement recommandé d\'effectuer une copie de votre table log_activity pour pouvoir annuler certaines modifications si nécessaire.';
$txt['toolbox_stats_info3'] = '<strong>***REMARQUE***</strong> Cette fonction <strong>modifiera</strong> les totaux ci-dessus. Les valeurs mises à jour reflèteront ce qui *se trouve* dans votre base de données, et non ce qui *s\'est passé* au cours du temps.  Par exemple, imaginons que vous ayez 2 nouveaux sujets et 3 messages dans chacun de ces sujets. Imaginons ensuite que vous effaciez un message du premier sujet et, ensuite, vous effaciez complètement le second sujet. Vos statistiques contiendraient malgré tout 2 nouveaux sujets et 6 nouveaux messages. Grâce à cette fonction, les totaux seront changés en 1 seul nouveau sujet et 2 nouveaux messages.';
$txt['toolbox_stats_warn'] = 'Le système a trouvé des données dans la table des messages datant du %s, vos statistiques démarent au %s.  Vous avez plusieurs possibilités sur la manière de gérer les données perdues relatives aux pages vues quotidiennement et au utilisateurs les plus souvent en ligne (ces données <strong>ne peuvent pas</strong> être régénérées).  Les différents choix sont présentés ci-dessous, ainsi que leurs éventuelles conséquences.';
$txt['toolbox_skip'] = 'Saute';
$txt['toolbox_skip_desc'] = 'N\'ajoute aucune donnée manquante.  Ceci validera uniquement, et corrigera si nécessaire, le nombre de messages/sujets/inscriptions quotidiens dans la table d\'historique de l\'activité, aucune npouvelle ligne ne sera ajoutée.';
$txt['toolbox_zero'] = 'Zéro';
$txt['toolbox_zero_desc'] = 'Ceci reconstruira vos statistiques à partir de la date du message le plus ancien en reconstuisant des totaux journaliers messages/topics/nouveaux utilisateurs et en utilisant des 0 pour les données manquantes concernant les pages vues et les utilisateurs les plus longtemps connectés. Ceci aura pour effet de diminuer vos moyennes pour ces valeurs.';
$txt['toolbox_average'] = 'Moyenne';
$txt['toolbox_average_desc'] = 'Ceci reconstruira vos statistiques à partir de la date du message le plus ancien, en utilisant les moyennes actuelles du site pour les données manquantes concernant les pages vues et les utilisateurs les plus longtemps connectés. Les valeurs moyennes risquent tout de même de diminuer quelque peu';
$txt['toolbox_balanced'] = 'Equilibré';
$txt['toolbox_balanced_desc'] = 'Ceci reconstruira vos statistiques à partir du début, en reconstruisant correctement les totaux de messages/sujets/inscriptions et en utilisant une approche équilibrée pour remplir les données manquantes concernant les pages vues et les utilisateurs les plus longtemps connectés. Cette fonction estime les données manquantes en effectuant une régression linéaire à partir des valeurs actuelles. Les anciennes dates auront des valeurs plus faibles et les valeurs augmenteront avec les nouvelles dates. Cette fonction diminuera vos moyennes actuelles au prorata de la quantité de données manquantes. Néanmoins vos données auront l\'air plus naturelles.'; 
$txt['toolbox_rebuild_select'] = 'Comment reconstruire les données manquantes';

$txt['toolbox_merge'] = 'Fusion d\'utilisateurs';
$txt['toolbox_to'] = 'Fusion de (Destination)';
$txt['toolbox_from'] = 'Déplacement à partir de (Source)';
$txt['toolbox_merge_info'] = 'Ceci fusionnera deux identifiants d\'utilisateurs en un seul, en déplaçant les données de l\'utilisateur source vers l\'utilisateur destination. Ceci inclut : messages, sujets (créés par lui), pièces jointes, MP\'s (envoyés et reçus), événements calendriers, sondages (créés par lui).<br /><br />Pour certaines modifications, les données associées sont également déplacées, ceci inclut: Aeva (albums, items, commentaires, évaluations), signets, <a href="http://custom.simplemachines.org/mods/index.php?mod=381">Liens SMF</a> (propriété et évaluations) &amp; <a href="http://custom.simplemachines.org/mods/index.php?mod=2621">brouillons</a>';
$txt['toolbox_merge_selection'] = 'Commencez par entrer le nom des utilisateurs dans la boîte, une liste de sélection apparaîtra à partir de laquelle vous pourrez choisir un nom d\'utilisateur. Vous pouvez également spécifier directement le numéro utilisateur (ID) dans la boîte ou utiliser l\'icone de recherche pour rechercher un utilisateur. Lorsque vous sélectionnerez Démarrer la tâche maintenant, un écran de confirmation apparaîtra avec vos choix avant que la fonction s\'exécute.';
$txt['deluser_help'] = 'Ceci supprimera l\'utilisateur source après l\'opération de fusion. Vous n\'êtes pas obligés de faire ceci maintenant mais c\'est tout de même recommandé';
$txt['adjustuser_help'] = 'Cette étape optionnelle fusionnera également certaines informations contenues dans le profil de l\'utilisateur source.  Cela conservera, entre autres, la date d\'inscription la plus ancienne, cela additionnera les totaux de karma et le temps passé en ligne. Les autres données, comme le site web par exemple, seront copiées de la source vers la destination uniquement si ces champs sont vides chez l\'utilisateur destination (aucune donnée n\'est donc écrasée)';
$txt['toolbox_adjust_true'] = 'Les informations de profil des deux utilisateurs seront combinées';
$txt['toolbox_del_true'] = 'L\'utilisateur sera supprimé après l\'opération de fusion';

$txt['toolbox_merge_to'] = 'Entrez le nom de l\'utilisateur auquel les données seront <strong>AJOUTEES</strong>';
$txt['toolbox_merge_from'] = 'Entrez le nom de l\'utilisateur duquel les données seront <strong>SUPPRIMEES</strong>';
$txt['autosuggest_view_item'] = 'Voir le profil de ce membre';
$txt['toolbox_adjustuser'] = 'Autorise la combinaison des infos de profil';
$txt['toolbox_deluser'] = 'Autorise la suppression de l\'utilisateur source après fusion';

$txt['toolbox_inactive'] = 'Marquer comme lu';
$txt['toolbox_inactive_info'] = 'Cette fonction marque tous les forums/topics comme lu pour les utilisateurs inactifs pendant un nombre de jours défini';
$txt['toolbox_inactive_days'] = 'Nombre de jours qu\'un utilisateur doit rester inactif (60 par défaut)';

$txt['toolbox_MergeMembersValidate_info'] = 'Confirmez que vous souhaitez effectuer cette opération <strong>non</strong> réversible de fusion, s.v.p.';
$txt['toolbox_mergeuser_check'] = 'Validez la fusion d\'utilisateur';
$txt['toolbox_validate'] = 'Confirmation de la fusion d\'utilisateur';

$txt['toolbox_info'] = 'Recompte le nombre total de messages, fusionne des utilisateurs et effectue d\'autres tâches spécialisées avec ces outils.';
$txt['toolbox_done'] = 'La tâche Admin Toolbox \'%1$s\' s\'est effectuée correctement.';
$txt['toolbox_zeroid'] = 'Erreur Admin Toolbox: L\'identifiant utilisateur ne peut pas être vide.';
$txt['toolbox_adminid'] = 'Erreur Admin Toolbox: Cette action n\'est pas disponible sur le compte admin de base';
$txt['toolbox_sameid'] = 'Erreur Admin Toolbox: L\'utilisateur source et destination ne peut pas être le même.';
$txt['toolbox_badid'] = 'Erreur Admin Toolbox: Au moins un des utilisateurs spécifiés n\'existe pas.';
$txt['toolbox_baddelete'] = 'Erreur Admin Toolbox: Supprimer l\'utilisateur que vous utilisez actuellement est interdit.';

$txt['toolbox_merge_0'] = 'Préparation des données';
$txt['toolbox_merge_1'] = 'Fusion des sujets';
$txt['toolbox_merge_2'] = 'Fusion des messages';
$txt['toolbox_merge_3'] = 'Fusion des pièces jointes';
$txt['toolbox_merge_4'] = 'Fusion des messages privés';
$txt['toolbox_merge_5'] = 'Fusion des événements du calendrier et des sondages';
$txt['toolbox_merge_aeva'] = 'Fusion des albums Aeva';
$txt['toolbox_merge_drafts'] = 'Fusion des brouillons';
$txt['toolbox_merge_bookmarks'] = 'Fusion des signets';
$txt['toolbox_merge_links'] = 'Fusion des liens';

$txt['permissionname_admintoolbox'] = 'Accéder à Admin Toolbox';
$txt['permissionhelp_admintoolbox'] = 'Autoriser les utilisateurs avec ces permissions à accéder à Admin Toolbox. Pourquoi feriez vous cela?';

?>