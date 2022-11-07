<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('build.head')


<style>
    body {
        background: url('assets/img/background-2.png');
        background-position: center;
        background-size: 100vh;
        background-repeat: no-repeat;
    }

    .referencias {
        margin: 1rem;
        margin-top: 0rem;
        margin-bottom: 0px;
        background-color: #F5F5F5;
        text-align: justify;
        padding: 1rem;
        border-radius: 5px;
        height: 48vh;
        overflow-y: scroll;
    }

    .referencias h1 {
        font-size: 18px;
        font-weight: bold;
    }

    .referencias p {
        font-size: 14px;
        line-height: 14px;
    }

    .box {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .box img {
        margin-top: 1rem;
        height: 110px;
        border-radius: 8px;
        width: auto;
    }

    .box h1 {
        margin-top: 5px;
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
    }
</style>

<body class="antialiased">

    @include('build.header')

    <!-- main content -->
    <section>

        <div class="row justify-content-center">
            <div class="col justify-content-center align-items-center d-flex">
                <div class="box m-3">
                    <img src="{{ url('assets/img/books.jpg') }}" width="95px" alt="ícone banho">
                    <h1>Referências</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="referencias">
                    <p>ALTIMIER, Leslie; Phillips, Raylene. The Neonatal Integrative Developmental Care Model: Advanced
                        Clinical Applications of the Seven Core Measures for Neuroprotective Family-centered
                        Developmental Care. Newborn and Infant Nursing Reviews, Volume 16, Issue 4, [online] 2016, Pages
                        230-244. ISSN 1527-3369. Disponível em:<https: //doi.org/10.1053/j.nainr.2016.09.030>. Acesso em
                            <14 Set 2022>.</p>

                    <p>ÁLVAREZ, María José Álvarez; Rodríguez-González, Dolores; Rosón, María; Lapeña, Santiago;
                        Gómez-Salgado, Juan; Fernández-García, Daniel. Effects of Massage Therapy and Kinesitherapy to
                        Develop Hospitalized Preterm Infant's Anthropometry: A Quasi-Experimental Study. Journal of
                        Pediatric Nursing. Volume 46, [online] 2019, Pages e86-e91. ISSN 0882-5963. Disponível em:
                        <https: //doi.org/10.1016/j.pedn.2019.03.015>. Acesso em< 10 Set 2022>.
                    </p>

                    <p>ANAUATE, Carla; Kahhale, Edna Maria Severino Peters Kahhale. Chapter 8 - Preparing children to
                        learn through early intervention, Editor(s): Darlyne G. Nemeth, Janna Glozman. Evaluation and
                        Treatment of Neuropsychologically Compromised Children. Academic Press, [online] 2020, Pages
                        131-156. ISBN 9780128195451. Disponível em:<https: //doi.org/10.1016/B978-0-12-819545-1.00008-4>
                            . Acesso em<10 Set 2022>.
                    </p>

                    <p>BARBOSA, Gessandro Elpídio Fernandes et al. Dificuldades Iniciais com a Técnica da Amamentação e
                        Fatores Associados a Problemas com a Mama em Puérperas. Revista Paulista de Pediatria [online].
                        2017, v. 35, n. 3. Acesso em< 06 Mai 2022>, pp. 265-272. Disponível em: <https:
                                //doi.org/10.1590/1984-0462/;2017;35;3;00004>. Epub 13 Jul 2017. ISSN 1984-0462.
                                https://doi.org/10.1590/1984-0462/;2017;35;3;00004.
                    </p>

                    <p>BRASIL. Ministério da Saúde. Secretaria de Atenção à Saúde. Departamento de Ações Programáticas
                        Estratégicas. Método Canguru: manual da terceira etapa do Método Canguru na Atenção Básica /
                        Ministério da Saúde, Secretaria de Atenção à Saúde, Departamento de Ações Programáticas
                        Estratégicas. – Brasília : Ministério da Saúde, 2018.
                    </p>

                    <p>___________. Ministério da Saúde. APS. Qual a frequência normal de evacuações em um bebê de dois
                        meses?. Segunda Opinião Formativa – SOF. 11 Dez 2019. ID: sofs-43081. Disponível em:
                        < https://aps-repo.bvs.br/aps/qual-a-frequencia-normal-de-evacuacoes-em-um-bebe-de-dois-meses />
                        . Acesso em <03 Mai 2022>.
                    </p>

                    <p>___________.Ministério da Saúde. Secretaria de Atenção à Saúde. Promovendo o Aleitamento Materno
                        2ª edição, revisada. Brasília: 2007. Disponível em:<
                            https://bvsms.saude.gov.br/bvs/publicacoes/album_seriado_aleitamento_materno.pdf>. Acesso em
                            <06 Mai 2022>.
                    </p>
                    <p>___________. Ministério da Saúde. Secretaria de Atenção à Saúde. Departamento de Ações
                        Programáticas Estratégicas. Atenção humanizada ao recém-nascido: Método Canguru: manual técnico/
                        Ministério da Saúde, Secretaria de Atenção à Saúde, Departamento de Ações Programáticas
                        Estratégicas. – 3. ed. – Brasília : Ministério da Saúde, 2017. 340 p. : il.
                    </p>
                    <p>_______. Ministério da Saúde. Secretaria de Atenção à Saúde. Departamento de Ações Programáticas
                        Estratégicas. Atenção à saúde do recém-nascido: guia para os profissionais de saúde / Ministério
                        da Saúde, Secretaria de Atenção à Saúde, Departamento de Ações Programáticas Estratégicas. – 2.
                        ed. atual. – Brasília : Ministério da Saúde, 2014. Disponível em: < Atenção à saúde do
                            recém-nascido: guia para os profissionais de saúde, Volume IV – Cuidados com o recém-nascido
                            pré-termo (saude.gov.br)>. Acesso em <20 Jul 2021>.
                    </p>
                    <p>DELGADO BS, Costa R, Vesco SNP, Santos FA, Santos SV. Estratégias de cuidado com a pele do
                        recém-nascido em unidade de internação neonatal. ESTIMA, Braz. J. Enterostomal Ther., 16: e1319.
                        Acesso em< 02 Mai 2022>. Disponível em: https://doi.org/10.30886/estima.v16.745_PT>.
                    </p>
                    <p>FIGUEIRA, Nídia. Como fazer móbile para berço. Portal UMCOMO. [internet] 2017. Disponível em:<
                            https://casa.umcomo.com.br/artigo/como-fazer-mobile-para-berco-27400.html>. Acesso em<14 Set
                                2022>.
                    </p>
                    <p>FIOCRUZ. Fundação Oswaldo Cruz. Banco de Leite Humano do IFF/Fiocruz lança campanha de doação de
                        leite. Instituto Nacional de Saúde da Mulher, da Criança e do Adolescente Fernandes Figueira
                        (IFF/Fiocruz). Rio de Janeiro/RJ. 2021. Disponível em:<
                            https://rblh.fiocruz.br/doacao-de-leite-humano-0>. Acesso em <06 Mai 2022>.
                    </p>

                    <p>_________. Fundação Oswaldo Cruz. Na Primeira Semana em Casa. Rede Brasileira de Leite Humano
                        Brasil. Rede Global de Bancos de Leite. Brasil. 2022. Disponível em:<
                            https://rblh.fiocruz.br/na-primeira-semana-em-casa>. Acesso em <06 Mai 2022>.
                    </p>
                    <p>GARCIA, M. M. R.; SANTOS, J. G. dos; LIMA, S. da S.; FERRARI, R. O conhecimento das puérperas
                        sobre preparo das mamas e aleitamento materno. Revista Gestão & Amp; Saúde, [S. l.], v. 4, n. 1,
                        p. 1404–1418, 2013. Disponível em:< https://periodicos.unb.br/index.php/rgs/article/view/190>.
                            Acesso em: <10 Mai 2022>.

                    </p>
                    <p>GODOY, Camila Domingues; SILVA, Mykhaela Misael de Aguiar e; SANTOS, Thais Cristina dos; SANTANA,
                        Cleiton José; MIRANDA, Ludmilla Laura. Neonatal jaundice: nurses’ action against early
                        identification. Research, Society and Development, [S. l.], v. 10, n. 15, p. e386101522765,
                        2021. DOI: 10.33448/rsd-v10i15.22765. Disponível em:<
                            https://rsdjournal.org/index.php/rsd/article/view/22765>. Acesso em< 02 Mai 2022>.
                    </p>
                    <p>HO, N.T., Li, F., Lee-Sarwar, K.A. et al. Meta-análise dos efeitos do aleitamento materno
                        exclusivo na microbiota intestinal infantil entre populações. Nat Commun 9, 4169 (2018) Nature
                        communications, 9(1), 4169. Disponível em:< https://doi.org/10.1038/s41467-018-06473-x>. Acesso
                            em< 29 Ago 2022>.
                    </p>
                    <p>KORIOTH, Trisha. Hear this: Cotton-tipped swabs are not made for ears. American Academy of
                        Pediatrics [online]. 2017. Disponível em:<
                            https://publications.aap.org/aapnews/news/10934/Hear-this-Cotton-tipped-swabs-are-not-made-for?searchresult=1>
                            . Acesso em:< 30 Ago 2022>.
                    </p>
                    <p>LEITE, Airton César et al.. Contributions of nursing care in the prevention of skin lesions in
                        newborns in the Neonatal Intensive Care Unit. Research, Society and Development, [S. l.], v. 10,
                        n. 2, p. e20410212281, 2021. DOI: 10.33448/rsd-v10i2.12281. Disponível em:<
                            https://rsdjournal.org/index.php/rsd/article/view/12281>. Acesso em< 02 Mai 2022>.
                    </p>
                    <p>LIMA RO, Estevam LD, Leite FM, Almeida MV, Amorim MHC, Bringuente ME, et al.
                        Intervenção de enfermagem-primeiro banho do recém-nascido: estudo randomizado sobre o
                        comportamento neonatal. Acta Paul Enferm. 2020;33:e-APE20190031. Acesso em< 02 Mai 2022>.
                            Disponível em:< https://www.scielo.br/j/ape/a/MNTRtZTNDLCWgHV4YWpHhmP/?format=pdf>.
                    </p>
                    <p>LIMA, Leilson da Silva; Reis, Erica Amoras Ferraz; Silva, Eloisa Melo da; Moura, Jose Pedro
                        Gomes. Cuidados de enfermagem na termorregulação de recém-nascidos prematuros: revisão
                        integrativa. Cogitare enferm. [Internet]. 2020. Acesso em< 02 Mai 2022>; 25. Disponível em:
                            http://dx.doi.org/10.5380/ce.v25i0.70889.
                    </p>
                    <p>MA, Liang; Yang, Bingshang; Meng, Lingdan; Wang, Baohong; Zheng, Chunhui; Cao, Aihua. Effect of
                        early intervention on premature infants’ general movements. Brain and Development [online].
                        2015. Volume 37, Issue 4. Pages 387-393, ISSN 0387-7604. Disponível em:<https:
                            //doi.org/10.1016/j.braindev.2014.07.002>. Acesso em< 10 Set 2022>.
                    </p>
                    <p>MEEK, Joan Younger; NOBLE, Lawrence; Relatório Técnico: Aleitamento Materno e Uso do Leite
                        Humano. Pediatria Julho de 2022; 150 (1): e2022057989. 10.1542/peds.2022-057989. Disponível em:<
                            https://doi.org/10.1542/peds.2022-057989>. Acesso em< 29 Ago 2022>.
                    </p>
                    <p>OLIVEIRA, Paula Marciana Pinheiro; Rebouças, Cristiana Brasil de Almeida; e Pagliuca, Lorita
                        Marlena Freitag. Literatura de cordel como meio de promoção para o aleitamento materno. Escola
                        Anna Nery [online]. 2008, v. 12, n. 2 Acesso em< 06 Mai 2022>, pp. 217-223. Disponível em:
                            <https: //doi.org/10.1590/S1414-81452008000200003>. Epub 26 Nov 2009. ISSN 2177-9465.
                                https://doi.org/10.1590/S1414-81452008000200003.
                    </p>
                    <p>MORAIS, Thaize Carvalho Estrela do Vale et al. Breastfeeding technique and the incidence of
                        nipple traumas in puerperal women attended in a city hospital: intervention study. Revista
                        Brasileira de Saúde Materno Infantil [online]. 2020, v. 20, n. 3. Acesso em< 06 Mai 2022>, pp.
                            695-703. Disponível em: <https: //doi.org/10.1590/1806-93042020000300003>. Epub 30 Out 2020.
                                ISSN 1806-9304. https://doi.org/10.1590/1806-93042020000300003.
                    </p>

                    <p>OLIVEIRA, Aghata Marina de Faria et al. Risk and protective factors for sudden infant death
                        syndrome. Revista Brasileira de Enfermagem [online]. 2020, v. 73, n. 2. Acesso em< 29 Abr 2022>,
                            e20190458. Disponível em: <https: //doi.org/10.1590/0034-7167-2019-0458>. Epub 30 Mar 2020.
                                ISSN 1984-0446. https://doi.org/10.1590/0034-7167-2019-0458.
                    </p>
                    <p>ROCHA, Adriana Duarte et al. “Horário do Soninho”: uma estratégia para reduzir os níveis de
                        pressão sonora em uma unidade de terapia intensiva neonatal. Enfermagem em Foco, [S.l.], v. 11,
                        n. 1, jun. 2020. ISSN 2357-707X. Disponível em: <http:
                            //revista.cofen.gov.br/index.php/enfermagem/article/view/2698/714>. Acesso em< 28 Abr 2022>.
                                doi:https://doi.org/10.21675/2357-707X.2020.v11.n1.2698.
                    </p>
                    <p>RODOVANSKI, Giovana Pascoali; Reus, Bruna Aparecida Bêz; Damiani, Angela Vitória Cechinel;
                        Mattos, Karina Franco; Moreira, Rafaela Silva; Santos, Adriana Neves dos. Home-based early
                        stimulation program targeting visual and motor functions for preterm infants with delayed
                        tracking: Feasibility of a Randomized Clinical Trial. Research in Developmental Disabilities.
                        Volume 116, [online] 2021, 104037. ISSN 0891-4222. Disponível em:<https:
                            //doi.org/10.1016/j.ridd.2021.104037>. Acesso em<10 Set 2022>.
                    </p>
                    <p>SBP. Sociedade Brasileira de Pediatria. Atualização sobre os Cuidados com a Pele do Recém-Nascido
                        [arquivo eletrônico]. Departamentos Científicos de Dermatologia e Neonatologia, 2019-2021.
                        Acesso em< 11 Out 2022>. Disponível em
                            < https://www.sbp.com.br />.
                    </p>

                    <p>___________. Como Colher e Estocar o Leite Materno. Departamento Científico de Aleitamento
                        Materno [online] – São Paulo, SP. 2022. Disponível em:
                        <
                            https://www.sbp.com.br/especiais/pediatria-para-familias/nutricao/como-colher-e-estocar-o-leite-materno />
                        . Acesso em <06 Mai 2022>.
                    </p>
                    <p>SOBENDE. Manual do Consenso de Cuidado com a Pele do Recém-nascido [arquivo eletrônico]/
                        [Sociedade Brasileira de Enfermagem em Dermatologia]. Sociedade Brasileira de Enfermagem em
                        Dermatologia, 2020. Acesso em< 02 Mai 2022>. Disponível em:
                            < http://sobende.org.br/consenso-de-cuidado-com-a-pele-do-recem-nascido />.
                    </p>
                    <p>SOARES, Marilia Freitas Elias et al . Dor no recém-nascido na percepção da mãe. Rev. Dor, São
                        Paulo, v. 18, n. 4, p. 338-341, Dec. 2017. Disponível em: <http:
                            //old.scielo.br/scielo.php?script=sci_arttext&pid=S1806-00132017000400338&lng=en&nrm=iso>.
                            Acesso em< 03 Mai 2022>. DOI https://doi.org/10.5935/1806-0013.20170126.
                    </p>

                    <p>SOLTANI, Nasim; Sevedrasooli, Alehe; Jabraeili, Mahnaz; Mousavi, Saeed Mousavi. The effect of
                        maternal multisensory stimulations on bath stress in premature infants: A randomized controlled
                        clinical trial. Infant Behavior and Development. Volume 67, [online] 2022, 101720. ISSN
                        0163-6383. Disponível em:<https: //doi.org/10.1016/j.infbeh.2022.101720>. Acesso em <14 Set
                                2022>.

                    </p>
                    <p>SOUSA, K.M. P. de; OLIVEIRA, E. de S.; CAVALCANTE, O. S.S.; LACERDA, V. T. P. P.; LIMA, A.M. A.;
                        MORAIS, A.C. L. N. de. Perspectiva da terapia alprostadil em desease cardíaca congênita: foco no
                        recém-nascido. Pesquisa, Sociedade e Desenvolvimento, [S. l.], v. 9, n. 9, p. e966997641, 2020.
                        DOI: 10,33448/rsd-v9i9.7641. Disponível em:<
                            https://rsdjournal.org/index.php/rsd/article/view/7641>. Acesso em< 2 de Mai 2022>.
                    </p>
                    <p>SPITTLE, Alicia; Treyvaud, Karli. The role of early developmental intervention to influence
                        neurobehavioral outcomes of children born preterm. Seminars in Perinatology. Volume 40, Issue 8,
                        [online] 2016, Pages 542-548. ISSN 0146-0005. Disponível em:<https:
                            //doi.org/10.1053/j.semperi.2016.09.006>. Acesso em< 10 Set 2022>.
                    </p>

                    <p>VALLEJO, Liliana Glanzmann. Leite materno: um alimento que vale ouro. Rev. Em Foco [online]. Jul
                        – Ago 2022, edição 31. Disponível em:<
                            http://www.unirio.br/comunicacaosocial/arquivos/em-foco/EmFoco08_22.pdf>. Acesso em<06 Set
                                2022>.
                    </p>
                </div>
            </div>
        </div>

    </section>
    <!-- /main content -->

    @include('build.footer')

    @include('build.scripts')

</body>

</html>
