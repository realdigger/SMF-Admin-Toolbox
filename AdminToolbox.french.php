<?php
// Version: 2.0; ManageToolbox

$txt['toolbox_title']  = 'Admin Toolbox (Bo�te � outils de l\'administrateur)';
$txt['toolbox_run_now'] = 'D�marrer la t�che maintenant';
$txt['lastLoggedIn'] = 'Dernier actif';
$txt['userid'] = 'num�ro d\'utilisateur';

$txt['toolbox_recount'] = 'Recompte des messages des utilisateurs';
$txt['toolbox_recount_info'] = 'Utilisez cette fonction si le nombre des messages des utilisateurs n�cessite une mise � jour. Cela recomptera tous les messages faits par chaque utilisateur et cela mettra � jour leur total';
$txt['toolbox_stats'] = 'Recalcul des statistiques journali�res';
$txt['toolbox_stats_info'] = 'Utilisez cette fonction si vos messages/sujets et statistiques d\'inscription quotidiens n�cessitent une mise � jour. Ceci peut �tre n�cessaire si vous n\'enregistriez pas ces statistiques depuis le d�but, ou si vous avez import� des donn�es d\'un autre syst�me.';
$txt['toolbox_StatsValidate_info'] = 'Des donn�es sont manquantes, vous devez choisir la fa�on dont la reconstruction des statistiques doit s\'effectuer';
$txt['toolbox_stats_validate'] = 'Confirmez le recalcul des statistiques';
$txt['toolbox_stats_info1'] = 'Cette fonction recalcule la moyenne journali�re des messages, des nouveaux sujets et des inscriptions d\'utilisateurs. Ces donn�es sont utilis�es par la section concernant l\'historique du forum et la section de statut g�n�ral.  Reconstruire ces donn�es peut �tre n�cessaire si vous n\'enregistriez pas vos statistiques journali�res depuis le d�but, ou si vous avez import� des donn�es d\'un autre syst�me.';
$txt['toolbox_stats_info2'] = '<strong>***REMARQUE***</strong> Il est vivement recommand� d\'effectuer une copie de votre table log_activity pour pouvoir annuler certaines modifications si n�cessaire.';
$txt['toolbox_stats_info3'] = '<strong>***REMARQUE***</strong> Cette fonction <strong>modifiera</strong> les totaux ci-dessus. Les valeurs mises � jour refl�teront ce qui *se trouve* dans votre base de donn�es, et non ce qui *s\'est pass�* au cours du temps.  Par exemple, imaginons que vous ayez 2 nouveaux sujets et 3 messages dans chacun de ces sujets. Imaginons ensuite que vous effaciez un message du premier sujet et, ensuite, vous effaciez compl�tement le second sujet. Vos statistiques contiendraient malgr� tout 2 nouveaux sujets et 6 nouveaux messages. Gr�ce � cette fonction, les totaux seront chang�s en 1 seul nouveau sujet et 2 nouveaux messages.';
$txt['toolbox_stats_warn'] = 'Le syst�me a trouv� des donn�es dans la table des messages datant du %s, vos statistiques d�marent au %s.  Vous avez plusieurs possibilit�s sur la mani�re de g�rer les donn�es perdues relatives aux pages vues quotidiennement et au utilisateurs les plus souvent en ligne (ces donn�es <strong>ne peuvent pas</strong> �tre r�g�n�r�es).  Les diff�rents choix sont pr�sent�s ci-dessous, ainsi que leurs �ventuelles cons�quences.';
$txt['toolbox_skip'] = 'Saute';
$txt['toolbox_skip_desc'] = 'N\'ajoute aucune donn�e manquante.  Ceci validera uniquement, et corrigera si n�cessaire, le nombre de messages/sujets/inscriptions quotidiens dans la table d\'historique de l\'activit�, aucune npouvelle ligne ne sera ajout�e.';
$txt['toolbox_zero'] = 'Z�ro';
$txt['toolbox_zero_desc'] = 'Ceci reconstruira vos statistiques � partir de la date du message le plus ancien en reconstuisant des totaux journaliers messages/topics/nouveaux utilisateurs et en utilisant des 0 pour les donn�es manquantes concernant les pages vues et les utilisateurs les plus longtemps connect�s. Ceci aura pour effet de diminuer vos moyennes pour ces valeurs.';
$txt['toolbox_average'] = 'Moyenne';
$txt['toolbox_average_desc'] = 'Ceci reconstruira vos statistiques � partir de la date du message le plus ancien, en utilisant les moyennes actuelles du site pour les donn�es manquantes concernant les pages vues et les utilisateurs les plus longtemps connect�s. Les valeurs moyennes risquent tout de m�me de diminuer quelque peu';
$txt['toolbox_balanced'] = 'Equilibr�';
$txt['toolbox_balanced_desc'] = 'Ceci reconstruira vos statistiques � partir du d�but, en reconstruisant correctement les totaux de messages/sujets/inscriptions et en utilisant une approche �quilibr�e pour remplir les donn�es manquantes concernant les pages vues et les utilisateurs les plus longtemps connect�s. Cette fonction estime les donn�es manquantes en effectuant une r�gression lin�aire � partir des valeurs actuelles. Les anciennes dates auront des valeurs plus faibles et les valeurs augmenteront avec les nouvelles dates. Cette fonction diminuera vos moyennes actuelles au prorata de la quantit� de donn�es manquantes. N�anmoins vos donn�es auront l\'air plus naturelles.'; 
$txt['toolbox_rebuild_select'] = 'Comment reconstruire les donn�es manquantes';

$txt['toolbox_merge'] = 'Fusion d\'utilisateurs';
$txt['toolbox_to'] = 'Fusion de (Destination)';
$txt['toolbox_from'] = 'D�placement � partir de (Source)';
$txt['toolbox_merge_info'] = 'Ceci fusionnera deux identifiants d\'utilisateurs en un seul, en d�pla�ant les donn�es de l\'utilisateur source vers l\'utilisateur destination. Ceci inclut : messages, sujets (cr��s par lui), pi�ces jointes, MP\'s (envoy�s et re�us), �v�nements calendriers, sondages (cr��s par lui).<br /><br />Pour certaines modifications, les donn�es associ�es sont �galement d�plac�es, ceci inclut: Aeva (albums, items, commentaires, �valuations), signets, <a href="http://custom.simplemachines.org/mods/index.php?mod=381">Liens SMF</a> (propri�t� et �valuations) &amp; <a href="http://custom.simplemachines.org/mods/index.php?mod=2621">brouillons</a>';
$txt['toolbox_merge_selection'] = 'Commencez par entrer le nom des utilisateurs dans la bo�te, une liste de s�lection appara�tra � partir de laquelle vous pourrez choisir un nom d\'utilisateur. Vous pouvez �galement sp�cifier directement le num�ro utilisateur (ID) dans la bo�te ou utiliser l\'icone de recherche pour rechercher un utilisateur. Lorsque vous s�lectionnerez D�marrer la t�che maintenant, un �cran de confirmation appara�tra avec vos choix avant que la fonction s\'ex�cute.';
$txt['deluser_help'] = 'Ceci supprimera l\'utilisateur source apr�s l\'op�ration de fusion. Vous n\'�tes pas oblig�s de faire ceci maintenant mais c\'est tout de m�me recommand�';
$txt['adjustuser_help'] = 'Cette �tape optionnelle fusionnera �galement certaines informations contenues dans le profil de l\'utilisateur source.  Cela conservera, entre autres, la date d\'inscription la plus ancienne, cela additionnera les totaux de karma et le temps pass� en ligne. Les autres donn�es, comme le site web par exemple, seront copi�es de la source vers la destination uniquement si ces champs sont vides chez l\'utilisateur destination (aucune donn�e n\'est donc �cras�e)';
$txt['toolbox_adjust_true'] = 'Les informations de profil des deux utilisateurs seront combin�es';
$txt['toolbox_del_true'] = 'L\'utilisateur sera supprim� apr�s l\'op�ration de fusion';

$txt['toolbox_merge_to'] = 'Entrez le nom de l\'utilisateur auquel les donn�es seront <strong>AJOUTEES</strong>';
$txt['toolbox_merge_from'] = 'Entrez le nom de l\'utilisateur duquel les donn�es seront <strong>SUPPRIMEES</strong>';
$txt['autosuggest_view_item'] = 'Voir le profil de ce membre';
$txt['toolbox_adjustuser'] = 'Autorise la combinaison des infos de profil';
$txt['toolbox_deluser'] = 'Autorise la suppression de l\'utilisateur source apr�s fusion';

$txt['toolbox_inactive'] = 'Marquer comme lu';
$txt['toolbox_inactive_info'] = 'Cette fonction marque tous les forums/topics comme lu pour les utilisateurs inactifs pendant un nombre de jours d�fini';
$txt['toolbox_inactive_days'] = 'Nombre de jours qu\'un utilisateur doit rester inactif (60 par d�faut)';

$txt['toolbox_MergeMembersValidate_info'] = 'Confirmez que vous souhaitez effectuer cette op�ration <strong>non</strong> r�versible de fusion, s.v.p.';
$txt['toolbox_mergeuser_check'] = 'Validez la fusion d\'utilisateur';
$txt['toolbox_validate'] = 'Confirmation de la fusion d\'utilisateur';

$txt['toolbox_info'] = 'Recompte le nombre total de messages, fusionne des utilisateurs et effectue d\'autres t�ches sp�cialis�es avec ces outils.';
$txt['toolbox_done'] = 'La t�che Admin Toolbox \'%1$s\' s\'est effectu�e correctement.';
$txt['toolbox_zeroid'] = 'Erreur Admin Toolbox: L\'identifiant utilisateur ne peut pas �tre vide.';
$txt['toolbox_adminid'] = 'Erreur Admin Toolbox: Cette action n\'est pas disponible sur le compte admin de base';
$txt['toolbox_sameid'] = 'Erreur Admin Toolbox: L\'utilisateur source et destination ne peut pas �tre le m�me.';
$txt['toolbox_badid'] = 'Erreur Admin Toolbox: Au moins un des utilisateurs sp�cifi�s n\'existe pas.';
$txt['toolbox_baddelete'] = 'Erreur Admin Toolbox: Supprimer l\'utilisateur que vous utilisez actuellement est interdit.';

$txt['toolbox_merge_0'] = 'Pr�paration des donn�es';
$txt['toolbox_merge_1'] = 'Fusion des sujets';
$txt['toolbox_merge_2'] = 'Fusion des messages';
$txt['toolbox_merge_3'] = 'Fusion des pi�ces jointes';
$txt['toolbox_merge_4'] = 'Fusion des messages priv�s';
$txt['toolbox_merge_5'] = 'Fusion des �v�nements du calendrier et des sondages';
$txt['toolbox_merge_aeva'] = 'Fusion des albums Aeva';
$txt['toolbox_merge_drafts'] = 'Fusion des brouillons';
$txt['toolbox_merge_bookmarks'] = 'Fusion des signets';
$txt['toolbox_merge_links'] = 'Fusion des liens';

$txt['permissionname_admintoolbox'] = 'Acc�der � Admin Toolbox';
$txt['permissionhelp_admintoolbox'] = 'Autoriser les utilisateurs avec ces permissions � acc�der � Admin Toolbox. Pourquoi feriez vous cela?';

?>