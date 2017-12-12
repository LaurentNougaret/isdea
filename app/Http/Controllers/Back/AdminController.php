<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Repositories\PDFRepository;
use App\Result;
use Mpdf\Mpdf;

class AdminController extends Controller
{

    private $project;

    public function __construct(PDFRepository $projects)
    {
        $this->project = $projects;

    }

    public function generatePDF(Result $result)
    {
        $projects = $this->project->getResultInfos($result->id);

        $mpdf = new Mpdf([
            'mode' => 'utf-8',
            'format' => [210, 297],
            'orientation' => 'P',
            'debug' => true,
            'allow_output_buffering' => true,
        ]);
        $stylesheet = file_get_contents('css/app.css');
        $mpdf->WriteHTML('<style>'.$stylesheet.'</style>',1);
        ob_start();
        $html = ob_get_clean();
        ?>

        <!DOCTYPE html>

        <head>
            <meta charset="utf-8">


        </head>

        <body>

        <br><br><br><br>
        <hr style="border-bottom:1px solid #7f7f7f;">
        <table width="100%" class="" style=" font-family:Verdana;">
            <tr style="height:150px;">
                <td  width="10%" style="text-align:left; font-size: 11pt;color:#7f7f7f;font-family:"Century Gothic", CenturyGothic, AppleGothic, sans-serif;"><?php echo stripslashes($result->id); ?>
                </td>
                <td width="90%" style="text-align:left; padding-left: 155px; font-size: 20pt; color:#343893;font-family:"Century Gothic", CenturyGothic, AppleGothic, sans-serif; font-weight:bolder">
                <?php echo stripslashes($projects->content[1]); ?>
                </td>
            </tr>

        </table>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group"  style="height: 100px;padding:0px 10px;">
                    <h3 >Composition de l'équipe</h3>
<!--                    --><?php //dump($result->content[2]) ?>
                    <strong>Mandataire :</strong> <?php echo $projects->content[2]; ?><br/><br/>
                    <strong>Concepteur(s) :</strong> <?php echo stripslashes($projects->content[3]); ?><br/><br/>
                    <strong>Investisseur(s) / Promoteur(s) :</strong> <?php echo stripslashes($projects->content[4]); ?><br/><br/>
                    <strong>Exploitant(s) :</strong> <?php echo stripslashes($projects->content[5]); ?> <br /><br/>
                    <strong>Autre(s) :</strong> <?php echo stripslashes($projects->content[6]); ?> <br/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group"  style="height: 200px; padding:0px 10px;">
                    <h3>Synthèse de l'offre</h3>
                    <h4>Description</h4>
                    <?php echo stripslashes($projects->content[31]); ?><br/>
                    <br><br>
                    <h4>Avis de synthèse</h4>
                    <?php if( $projects->content[32] != '') : ?>
                    <div class="avis">
                        <div class="quote">
                            <?php echo stripslashes($projects->content[32]); ?><br/>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
        <pagebreak />
        <?php if( $projects->content[29] != '' ) : ?>
        <div class="row">
            <div class="col-md-12" style="text-align: center; margin-top:20px;">
                <img class="illustration_petite" style="max-height:250px;min-height:250px" src="<?php echo url();?>/storage/<?php echo $result->content[29];?>"/>

            </div>
        </div>
        <?php endif; ?>
        <?php if( $projects->content[30] != '' ) : ?>
        <div class="row">
            <div class="col-md-12" style="text-align: center; margin-top:20px;">
                <img class="illustration_grande" style="max-height:350px;" src="<?php echo url();?>/storage/<?php echo $result->content[30];?>"/>
            </div>
        </div>
        <?php endif; ?>
        <pagebreak />
        </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group"  style="height: 100px">
                    <h3 ><?php trans('form.completeness.case')?>COMPLETUDE DU DOSSIER</h3>
                    <h4><?php trans('form.missing_element.commentary')?>:</h4>
                    <?php echo stripslashes($result->content[7]); ?>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <h3 >ANALYSE DE L'OFFRE AU REGARD DES CONDITIONS PARTICULIERES DE SITE </h3>
                <div class="form-group"  style="height: 200px; ">
                    <h4>Rappel des principales attentes découlant des Conditions particulières de site - PHASE2</h4>
                    <?php if( $result->content[8] != '') : ?>
                        <?php echo stripslashes($result->content[8]); ?><br/>
                        <br/>
                    <?php endif; ?>
                    <br><br>
                    <h4>Points de vigilance sur l'offre au regard des Conditions particulières de site - PHASE2</h4>
                    <?php if( $result->content[9] != '') : ?>
                        <?php echo stripslashes($result->content[9]); ?><br/><br/>
                    <?php endif; ?>
                    <br><br>
                    <h4>Points de vigilance sur l'offre au regard du PLU et de toutes les servitudes d'urbanisme</h4>
                    <?php if( $result->content[10] != '') : ?>
                        <?php echo stripslashes($result->content[10]); ?><br/>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <br/>
        <pagebreak />
        <div class="row">
            <div class="col-md-12">
                <h3 >ANALYSE DE L'OFFRE AU REGARD DES CRITERES DE SELECTION DU REGLEMENT- 1/3 </h3>
                <div class="form-group">
                    <h4>Qualité du programme</h4>
                    <?php if( $result->content[11] != '') : ?>
                        <?php echo stripslashes($result->content[11]); ?><br/>
                        <br/>
                    <?php endif; ?>
                    <h5>Evolution par rapport à la candidature</h5>
                    <?php if( $result->content[12] != '') : ?>
                        <?php echo stripslashes($result->content[12]); ?><br/>
                        <br/>
                    <?php endif; ?>
                    <h5>Avis sur la qualité du programme</h5>
                    <?php if( $result->content[13] != '') : ?>
                        <div class="avis">
                            <div class="quote">
                                <?php echo stripslashes($result->content[13]); ?><br/>
                            </div>
                        </div>
                    <?php endif; ?>
                    <br><br>
                    <h4>QUALITÉ URBAINE ET ARCHITECTURALE DU PROJET</h4>
                    <?php if( $result->content[14] != '') : ?>
                        <?php echo stripslashes($result->content[14]); ?><br/>
                        <br/>
                    <?php endif; ?>
                    <h5>Avis sur la qualité urbaine et architecturale du projet</h5>
                    <?php if( $result->content[15] != '') : ?>
                        <div class="avis">
                            <div class="quote">
                                <?php echo stripslashes($result->content[15]); ?><br/>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <pagebreak />
        <div class="row">
            <div class="col-md-12">
                <h3 >ANALYSE DE L'OFFRE AU REGARD DES CRITERES DE SELECTION DU REGLEMENT - 2/3 </h3>
                <div class="form-group">
                    <h4>CARACTERE INNOVANT DU PROJET</h4>
                    <?php if( $result->content[16] != '') : ?>
                        <?php echo stripslashes($result->content[16]); ?><br/>
                        <br/>
                    <?php endif; ?>
                    <h5>Evolution par rapport à la candidature</h5>
                    <?php if( $result->content[17] != '') : ?>
                        <?php echo stripslashes($result->content[17]); ?><br/>
                        <br/>
                    <?php endif; ?>
                    <h5>Avis sur le caractère innovant du projet</h5>
                    <?php if( $result->content[18] != '') : ?>
                        <div class="avis">
                            <div class="quote">
                                <?php echo stripslashes($result->content[18]); ?><br/>
                            </div>
                        </div>
                    <?php endif; ?>
                    <br><br>
                    <h4>PERFORMANCE ENVIRONNEMENTALE ADAPTATION AU CHANGEMENT CLIMATIQUE</h4>
                    <?php if( $result->content[19] != '') : ?>
                        <?php echo stripslashes($result->content[19]); ?><br/>
                        <br/>
                    <?php endif; ?>
                    <h5>Evolution par rapport à la candidature</h5>
                    <?php if( $result->content[20] != '') : ?>
                        <?php echo stripslashes($result->content[20]); ?><br/>
                        <br/>
                    <?php endif; ?>
                    <h5>Avis sur la performance environnementale & l’adaptation au changement climatique</h5>
                    <?php if( $result->content[21] != '') : ?>
                        <div class="avis">
                            <div class="quote">
                                <?php echo stripslashes($result->content[21]); ?><br/>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <pagebreak />
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
                                    <div> <?php echo stripslashes($result->content[22]); ?></div>
                                </td>
                                <td  width="500" style="padding:10px;color:#000000;">
                                    <div> <?php echo stripslashes($result->content[24]); ?></div>
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
                                            <?php echo stripslashes($result->content[23]); ?><br/>
                                        </div>
                                    </div>
                                </td>
                                <td  width="500" style="padding:10px;color:#000000;" class="avis">
                                    <div class="avis">
                                        <div class="quote">
                                            <?php echo stripslashes($result->content[25]); ?><br/>
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
                    <?php if( $result->content[26] != '') : ?>
                        <?php echo stripslashes($result->content[26]); ?><br/>
                        <br/>
                    <?php endif; ?>
                    <h5>Avis sur le prix</h5>
                    <?php if( $result->content[27] != '') : ?>
                        <div class="avis">
                            <div class="quote">
                                <?php echo stripslashes($result->content[27]); ?><br/>
                            </div>
                        </div>
                    <?php endif; ?>
                    <br><br>
                    <h3>ANALYSE PREALABLE DOMAINES</h3>
                    <?php if( $result->content[28] != '') : ?>
                        <div class="domaine">
                            <div class="quote">
                                <?php echo stripslashes($result->content[28]); ?><br/>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        </body>
        <?php
        $html = ob_get_clean();
//        if( $mode == 'html' ){ echo $html; }
//        $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');
        $mpdf->WriteHTML($html,2);
        $mpdf->Output();
        return $mpdf;
    }
}

