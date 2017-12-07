<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function generatePDF() {
//        require_once __DIR__ . '/vendor/autoload.php';
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => [190, 236],
            'orientation' => 'L'
        ]);

//        $mpdf->WriteHTML('<style>'.$stylesheet.'</style>',1);
        ob_start();
        $html = ob_get_clean();
        $mpdf->SetHTMLHeader('<table width="100%" class="header" style="height:330px;margin-bottom:35px">

                            <tr>
                                <th style="width:33%;"> <img src="http://www.inventonsmgp.fr/wp-content/themes/algoeparis/images/logo1.jpg"></th>
                                <th style="width:20%;text-align:right;margin-right:20px;color:#343893;font-size:11px; "> '.$project->unit_id->area.' <br> '.$project->Site->site.'  </th>
                                <th style=";width:45%;"> <img src="http://www.inventonsmgp.fr/wp-content/themes/algoeparis/images/logo2.jpg"></th>


                            </tr>


                        </table><br /><br /><br /><br /><br />');



        ob_start();

        ?>
        <!DOCTYPE html>

        <head>
            <meta charset="utf-8">

            <!-- EventON Version -->
            <meta name="generator" content="EventON 2.3" />
            <link rel="stylesheet" href="http://phase2.inventonsmgp.fr/wp-content/themes/algoeparis/css/bootstrap.min.css" type="text/css" media="all" />
            <style>
                body {
                    font-size: 11pt;
                    line-height: 1.2;
                    font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif, Century;
                }
                blockquote {
                    line-height: 1.2;
                    background-color: #DDDCD0 !important;
                }
                h4{
                    font-size: 16px;
                    font-weight:900;
                    color:#343893;
                    border-bottom: 1px solid #000000;
                    font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif, Century;
                    font-style: italic;
                    text-transform: uppercase;
                }
                h5{
                    font-size: 14px;
                    font-weight:900;
                    color:#343893;
                    font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif, Century;
                    font-style: italic;
                }
                h4.red{font-style: normal; color: red; font-size: 12pt;}

                h3{
                    background:#343893;
                    font-size:12pt;
                    padding:5px;
                    color:#ffffff;
                    text-transform: uppercase;
                    font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif, Century;
                }

                .avis {
                    padding: 0 !important;
                    padding-top: 10px !important;
                    background-color: #DDDCD0 !important;
                }

                strong{font-weight: bold;}
                .form-group{font-size: 10px; padding-top: 0; margin-top: 0; padding-bottom: 0; margin-bottom: 0; }
                .avis{background: #DCE6F1; padding: 10px; margin-top: 5px; margin-bottom: 5px;}
                .domaine{background: #D9D9D9; padding: 10px; margin-top: 5px; margin-bottom: 5px;}

            </style>

        </head>

        <body>



        <br><br><br><br>
        <hr style="border-bottom:1px solid #7f7f7f;">
        <table width="100%" class="" style="">
            <tr style="height:150px;">
                <td  width="10%" style="text-align:left; font-size: 11pt;color:#7f7f7f"><?php echo stripslashes($projet->id_projet); ?>
                </td>
                <td width="90%" style="text-align:left; padding-left: 155px; font-size: 20pt; color:#343893">
                <?php echo stripslashes($result->project_name); ?>
                </td>
            </tr>

        </table>





        <div class="row">
            <div class="col-md-12">
                <div class="form-group"  style="height: 100px;padding:0px 10px;">
                    <h3 >Composition de l'équipe</h3>
                    <strong>Mandataire :</strong> <?php echo stripslashes($result->content[0]); ?><br/><br/>
                    <strong>Concepteur(s) :</strong> <?php echo stripslashes($projet->equipe_concepteur); ?><br/><br/>
                    <strong>Investisseur(s) / Promoteur(s) :</strong> <?php echo stripslashes($projet->equipe_investisseur); ?><br/><br/>
                    <strong>Exploitant(s) :</strong> <?php echo stripslashes($projet->equipe_exploitant); ?> <br /><br/>
                    <strong>Autre(s) :</strong> <?php echo stripslashes($projet->equipe_autres); ?> <br/>
                </div>
            </div>
        </div>






        <?php if( $projet->illustration_1 != '' ) : ?>

            <div class="row">
                <div class="col-md-12" style="text-align: center; margin-top:20px;">
                    <img class="illustration_petite" style="max-height:250px;min-height:250px" src="<?php echo get_site_url();?>/wp-content/uploads/illustrations/<?php echo $projet->id_projet;?>/<?php echo $projet->illustration_1;?>"/>

                </div>
            </div>

        <?php endif; ?>





        <div class="row">
            <div class="col-md-12">
                <div class="form-group"  style="height: 200px; padding:0px 10px;">
                    <h3>Synthèse de l'offre</h3>
                    <h4>Description</h4>
                    <?php echo stripslashes($projet->desc_synthetique); ?><br/>

                    <br><br>
                    <h5>Avis de synthèse</h5>
                    <?php if( $projet->avis_desc_synthetique != '') : ?>
                        <div class="avis">


                            <div class="quote">
                                <?php echo stripslashes($projet->avis_desc_synthetique); ?><br/>
                            </div>

                        </div>
                    <?php endif; ?>


                </div>
            </div>
        </div>



        <pagebreak />
        <br><br><br><br><br><br>
        <?php if( $projet->illustration_2 != '' ) : ?>

            <div class="row">
                <div class="col-md-12" style="text-align: center; margin-top:20px;">
                    <img class="illustration_grande" style="max-height:350px;" src="<?php echo get_site_url();?>/wp-content/uploads/illustrations/<?php echo $projet->id_projet;?>/<?php echo $projet->illustration_2;?>"/>

                </div>
            </div>

        <?php endif; ?>
        <br><br>
        <?php if( $projet->illustration_3 != '' ) : ?>

            <div class="row">
                <div class="col-md-12" style="text-align: center; margin-top:20px;">
                    <img class="illustration_grande" style="max-height:350px;" src="<?php echo get_site_url();?>/wp-content/uploads/illustrations/<?php echo $projet->id_projet;?>/<?php echo $projet->illustration_3;?>"/>

                </div>
            </div>

        <?php endif; ?>



        <pagebreak />
        <br><br><br><br><br><br>
        <?php if( $projet->illustration_4 != '' ) : ?>

            <div class="row">
                <div class="col-md-12" style="text-align: center; margin-top:20px;">
                    <img class="illustration_grande" style="max-height:350px;" src="<?php echo get_site_url();?>/wp-content/uploads/illustrations/<?php echo $projet->id_projet;?>/<?php echo $projet->illustration_4;?>"/>

                </div>
            </div>

        <?php endif; ?>
        <br><br>
        <?php if( $projet->illustration_5 != '' ) : ?>

            <div class="row">
                <div class="col-md-12" style="text-align: center; margin-top:20px;">
                    <img class="illustration_grande" style="max-height:350px;" src="<?php echo get_site_url();?>/wp-content/uploads/illustrations/<?php echo $projet->id_projet;?>/<?php echo $projet->illustration_5;?>"/>

                </div>
            </div>

        <?php endif; ?>



        <pagebreak />
        <br><br><br><br><br><br>
        <?php if( $projet->illustration_6 != '' ) : ?>

            <div class="row">
                <div class="col-md-12" style="text-align: center; margin-top:20px;">
                    <img class="illustration_grande" style="max-height:350px;" src="<?php echo get_site_url();?>/wp-content/uploads/illustrations/<?php echo $projet->id_projet;?>/<?php echo $projet->illustration_6;?>"/>

                </div>
            </div>

        <?php endif; ?>
        <br><br>
        <?php if( $projet->illustration_7 != '' ) : ?>

            <div class="row">
                <div class="col-md-12" style="text-align: center; margin-top:20px;">
                    <img class="illustration_grande" style="max-height:350px;" src="<?php echo get_site_url();?>/wp-content/uploads/illustrations/<?php echo $projet->id_projet;?>/<?php echo $projet->illustration_7;?>"/>

                </div>
            </div>

        <?php endif; ?>



        <pagebreak />
        <br><br><br><br><br><br>
        <?php if( $projet->illustration_8 != '' ) : ?>

            <div class="row">
                <div class="col-md-12" style="text-align: center; margin-top:20px;">
                    <img class="illustration_grande" style="max-height:350px;" src="<?php echo get_site_url();?>/wp-content/uploads/illustrations/<?php echo $projet->id_projet;?>/<?php echo $projet->illustration_8;?>"/>

                </div>
            </div>

        <?php endif; ?>
        <br><br>
        <?php if( $projet->illustration_9 != '' ) : ?>

            <div class="row">
                <div class="col-md-12" style="text-align: center; margin-top:20px;">
                    <img class="illustration_grande" style="max-height:350px;" src="<?php echo get_site_url();?>/wp-content/uploads/illustrations/<?php echo $projet->id_projet;?>/<?php echo $projet->illustration_9;?>"/>

                </div>
            </div>

        <?php endif; ?>



        <pagebreak />


        <br><br><br><br>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group"  style="height: 100px">
                    <h3 >COMPLETUDE DU DOSSIER</h3>
                    <h4>Eléments manquants / commentaires :</h4>

                    <?php echo stripslashes($projet->element_manquant); ?>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <h3 >ANALYSE DE L'OFFRE AU REGARD DES CONDITIONS PARTICULIERES DE SITE </h3>
                <div class="form-group"  style="height: 200px; ">
                    <h4>Rappel des principales attentes découlant des Conditions particulières de site - PHASE2</h4>
                    <?php if( $projet->condition_rappel != '') : ?>
                        <?php echo stripslashes($projet->condition_rappel); ?><br/>
                        <br/>

                    <?php endif; ?>
                    <br><br>
                    <h4>Points de vigilance sur l'offre au regard des Conditions particulières de site - PHASE2</h4>
                    <?php if( $projet->condition_vigilance != '') : ?>

                        <?php echo stripslashes($projet->condition_vigilance); ?><br/><br/>

                    <?php endif; ?>

                    <br><br>
                    <h4>Points de vigilance sur l'offre au regard du PLU et de toutes les servitudes d'urbanisme</h4>
                    <?php if( $projet->condition_plu != '') : ?>

                        <?php echo stripslashes($projet->condition_plu); ?><br/>

                    <?php endif; ?>

                </div>
            </div>
        </div>

        <br/>
        <pagebreak />


        <br><br><br><br>
        <div class="row">
            <div class="col-md-12">
                <h3 >ANALYSE DE L'OFFRE AU REGARD DES CRITERES DE SELECTION DU REGLEMENT- 1/3 </h3>
                <div class="form-group">
                    <h4>Qualité du programme</h4>

                    <?php if( $projet->desc_qualite != '') : ?>
                        <?php echo stripslashes($projet->desc_qualite); ?><br/>
                        <br/>
                    <?php endif; ?>

                    <h5>Evolution par rapport à la candidature</h5>
                    <?php if( $projet->evolution_qualite != '') : ?>
                        <?php echo stripslashes($projet->evolution_qualite); ?><br/>
                        <br/>
                    <?php endif; ?>

                    <h5>Avis sur la qualité du programme</h5>
                    <?php if( $projet->avis_qualite != '') : ?>
                        <div class="avis">


                            <div class="quote">
                                <?php echo stripslashes($projet->avis_qualite); ?><br/>
                            </div>

                        </div>
                    <?php endif; ?>

                    <br><br>

                    <h4>QUALITÉ URBAINE ET ARCHITECTURALE DU PROJET</h4>

                    <?php if( $projet->desc_archi != '') : ?>
                        <?php echo stripslashes($projet->desc_archi); ?><br/>
                        <br/>
                    <?php endif; ?>

                    <h5>Avis sur la qualité urbaine et architecturale du projet</h5>
                    <?php if( $projet->avis_archi != '') : ?>
                        <div class="avis">


                            <div class="quote">
                                <?php echo stripslashes($projet->avis_archi); ?><br/>
                            </div>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>



        <pagebreak />
        <br><br><br><br>
        <div class="row">
            <div class="col-md-12">
                <h3 >ANALYSE DE L'OFFRE AU REGARD DES CRITERES DE SELECTION DU REGLEMENT - 2/3 </h3>
                <div class="form-group">
                    <h4>CARACTERE INNOVANT DU PROJET</h4>

                    <?php if( $projet->desc_innovation != '') : ?>
                        <?php echo stripslashes($projet->desc_innovation); ?><br/>
                        <br/>
                    <?php endif; ?>

                    <h5>Evolution par rapport à la candidature</h5>
                    <?php if( $projet->evolution_innovation != '') : ?>
                        <?php echo stripslashes($projet->evolution_innovation); ?><br/>
                        <br/>
                    <?php endif; ?>

                    <h5>Avis sur le caractère innovant du projet</h5>
                    <?php if( $projet->avis_innovation != '') : ?>
                        <div class="avis">


                            <div class="quote">
                                <?php echo stripslashes($projet->avis_innovation); ?><br/>
                            </div>

                        </div>
                    <?php endif; ?>


                    <br><br>
                    <h4>PERFORMANCE ENVIRONNEMENTALE ADAPTATION AU CHANGEMENT CLIMATIQUE</h4>

                    <?php if( $projet->desc_environnement != '') : ?>
                        <?php echo stripslashes($projet->desc_environnement); ?><br/>
                        <br/>
                    <?php endif; ?>

                    <h5>Evolution par rapport à la candidature</h5>
                    <?php if( $projet->evolution_environnement != '') : ?>
                        <?php echo stripslashes($projet->evolution_environnement); ?><br/>
                        <br/>
                    <?php endif; ?>

                    <h5>Avis sur la performance environnementale & l’adaptation au changement climatique</h5>
                    <?php if( $projet->avis_environnement != '') : ?>
                        <div class="avis">


                            <div class="quote">
                                <?php echo stripslashes($projet->avis_environnement); ?><br/>
                            </div>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>



        <pagebreak />
        <br><br><br><br>
        <div class="row">
            <div class="col-md-12">
                <h3 >ANALYSE DE L'OFFRE AU REGARD DES CRITERES DE SELECTION DU REGLEMENT - 3/3 </h3>
                <div class="form-group">

                    <div class="form-group">
                        <table border="0" width="100%">
                            <tr>
                                <td width="500"><h4>MONTAGE JURIDIQUE</h4></td>
                                <td width="500"><h4>MONTAGE FINANCIER</h4></td>
                            </tr>
                            <tr>
                                <td width="500" style=" color:#000000;padding:10px;">
                                    <div> <?php echo stripslashes($projet->desc_juridique); ?></div>
                                </td>
                                <td  width="500" style="padding:10px;color:#000000;">
                                    <div> <?php echo stripslashes($projet->desc_economique); ?></div>
                                </td>
                            </tr>
                            <tr>
                                <td><br/></td>
                            </tr>
                            <tr>
                                <td width="500"><h5>Avis sur le montage juridique</h5></td>
                                <td width="500"><h5>Avis sur le montage financier</h5></td>
                            </tr>
                            <tr>
                                <td  width="500" style=" color:#000000;padding:10px;" class="avis">

                                    <div class="avis">


                                        <div class="quote">
                                            <?php echo stripslashes($projet->avis_juridique); ?><br/>
                                        </div>

                                    </div>

                                </td>
                                <td  width="500" style="padding:10px;color:#000000;" class="avis">

                                    <div class="avis">


                                        <div class="quote">
                                            <?php echo stripslashes($projet->avis_economique); ?><br/>
                                        </div>

                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td><br/></td>
                            </tr>


                        </table>

                    </div>

                    <br><br>
                    <h4>Prix de cession</h4>

                    <?php if( $projet->prix != '') : ?>
                        <?php echo stripslashes($projet->prix); ?><br/>
                        <br/>
                    <?php endif; ?>

                    <h5>Avis sur le prix</h5>
                    <?php if( $projet->avis_prix != '') : ?>
                        <div class="avis">


                            <div class="quote">
                                <?php echo stripslashes($projet->avis_prix); ?><br/>
                            </div>

                        </div>
                    <?php endif; ?>
                    <br><br>
                    <h3>ANALYSE PREALABLE DOMAINES</h3>
                    <?php if( $projet->desc_domaine != '') : ?>
                        <div class="domaine">


                            <div class="quote">
                                <?php echo stripslashes($projet->desc_domaine); ?><br/>
                            </div>

                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>

        </body>
        <?php

        $html = ob_get_clean();

        if( $mode == 'html' ){ echo $html; }

        $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');

        $mpdf->WriteHTML($html);

        $mpdf->Output();
    }
}
