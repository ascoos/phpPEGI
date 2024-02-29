<?php 

/**
 * 
 */
$PEGI_Details = [
    'over_years' => 'sur %s ans',
    '3' => [
        'title' => 'PEGI 3',
        'descript' => 'Avec cette classification, le contenu du jeu est considéré comme adapté à toutes les classes d’âge. Le jeu ne doit pas comporter de sons ou d’images susceptibles d’effrayer ou de faire peur à de jeunes enfants. Les formes de violence très modérées dans un contexte comique ou enfantin sont acceptables. Le jeu ne doit faire entendre aucun langage grossier.',
        'img' => '3w.svg'
    ],
    '7' => [
        'title' => 'PEGI 7',
        'descript' => 'Les contenus présentant des scènes ou sons potentiellement effrayants tombent dans cette classe. Avec une classification PEGI 7 des scènes de violence très modérées (une violence implicite, non détaillée ou non réaliste) peuvent être autorisées.',
        'img' => '7w.svg'
    ],
    '12' => [
        'title' => 'PEGI 12',
        'descript' => 'Des jeux vidéo montrant de la violence sous une forme plus graphique par rapport à des personnages imaginaires et/ou une violence non graphique envers des personnages à figure humaine entrent dans cette classe d’âge. Des insinuations à caractère sexuel ou des positions sexuelles peuvent être présentes, mais dans cette catégorie les grossièretés doivent rester légères. Les jeux d’argent tels qu’ils se déroulent normalement dans le monde réel, dans les casinos ou dans les salles de jeux de hasard, sont également autorisés (par exemple les jeux de cartes qui, dans le monde réel, seraient joués pour de l’argent).',
        'img' => '12w.svg'
    ],
    '16' => [
        'title' => 'PEGI 16',
        'descript' => 'Cette classification s’applique lorsque la représentation de la violence (ou d’un contact sexuel) atteint un niveau semblable à celui que l’on retrouverait dans la réalité. Les jeux classés dans la catégorie 16 peuvent contenir un langage grossier plus extrême, des jeux de hasard, ainsi qu’une consommation de tabac, d’alcool ou de drogues.',
        'img' => '16w.svg'
    ],
    '18' => [
        'title' => 'PEGI 18',
        'descript' => 'La classification destinée aux adultes s’applique lorsque le degré de violence atteint un niveau où il rejoint une représentation de violence crue, de meurtre apparemment sans motivation ou de violence contre des personnages sans défense. La glorification des drogues illégales et les contacts sexuels explicites entrent également dans cette tranche d’âge.',
        'img' => '18w.svg'
    ],
    'Bad' => [
        'title' => 'Langage Grossier',
        'descript' => 'Le jeu contient un langage grossier. Ce descripteur peut apparaître sur les jeux classés PEGI 12 (grossièreté légère), PEGI 16 (jurons à caractère sexuel ou blasphèmes) ou PEGI 18 (jurons à caractère sexuel ou blasphèmes).',
        'img' => 'FR-bad-language.png'
    ], 
    'Discrimination' => [
        'title' => 'Discrimination',
        'descript' => 'Le jeu contient des représentations ethniques, religieuses, nationalistes ou autres stéréotypes susceptibles d’encourager la haine. Ce contenu est toujours limité à la classification PEGI 18 (et susceptible d’enfreindre la législation pénale nationale).',
        'img' => 'FR-discrimination.png'
    ],  
    'Drugs' => [
        'title' => 'Drogues',
        'descript' => 'Le jeu se réfère à ou décrit la consommation de drogues illégales, d’alcool ou de tabac. Les jeux sur lesquels apparaissent ce descripteur de contenu sont toujours classés PEGI 16 ou PEGI 18.',
        'img' => 'FR-drugs.png'
    ],  
    'Fear' => [
        'title' => 'Peur',
        'descript' => 'Ce descripteur peut apparaître sur des jeux PEGI 7 s’ils contiennent des images ou des sons susceptibles d’effrayer ou de faire peur aux jeunes enfants, ou sur des jeux PEGI 12 s’ils contiennent des sons ou des effets horrifiants (mais sans aucun contenu violent).',
        'img' => 'FR-fear.png'
    ],      
    'Gambling' => [
        'title' => 'Jeux de hasard',
        'descript' => 'Le jeu présente des contenus qui encouragent ou enseignent les jeux de hasard. Ces simulations de jeux concernent les jeux de hasard qui ont normalement lieu dans les casinos ou les salles de jeux de hasard. Les jeux ayant ce type de contenus sont classés PEGI 12, PEGI 16 ou PEGI 18.',
        'img' => 'FR-gambling.png'
    ],
    'Parental' => [
        'title' => 'Surveillance parentale recommandée',
        'descript' => '<p>En plus des notes numériques PEGI, vous verrez également la note « Conseil parental recommandé » pour certaines applications non liées aux jeux, introduite par PEGI pour les vitrines qui utilisent le CIRC (https://www.globalratings.com/).</p><p>Cela sert d’avertissement quant au fait que ces applications peuvent offrir une grande variété de contenus générés ou organisés par les utilisateurs. Cela s’applique généralement à des produits tels que Facebook, Twitter ou YouTube.</p>',
        'img' => 'PEGI_Parental.png'
        ],
    'Purchases' => [
        'title' => 'Achats Intégrés',
        'descript' => 'Le jeu offre aux joueurs la possibilité d\'acheter des biens ou des services numériques avec de la monnaie réelle. Ces achats incluent du contenu supplémentaire (niveaux bonus, tenues, objets surprises, musique), mais également des mises à niveau (par exemple pour désactiver les publicités), des abonnements à des mises à jour, des pièces virtuelles et d\'autres formes de monnaie de jeu.',
        'img' => 'FR-in-game-purchase.png'
    ],     
    'Sex' => [
        'title' => 'Sexe',
        'descript' => 'Ce descripteur peut accompagner une classification PEGI 12 si le jeu contient des positions ou des insinuations à caractère sexuel, une classification PEGI 16 s’il contient des scènes de nudité ou des rapports sexuels sans organes génitaux visibles ou une classification PEGI 18 s’il contient une activité sexuelle explicite. Les scènes de nudité dans un environnement non sexuel n’exigent aucune classification par âge spécifique et ce descripteur n’est pas nécessaire.',
        'img' => 'FR-sexual-content.png'
    ],
    'Violence' => [
        'title' => 'Violence',
        'descript' => 'Le jeu contient des scènes de violence. Dans les jeux classés PEGI 7, les scènes de violence ne peuvent être ni réalistes ni détaillées. Les jeux PEGI 12 peuvent contenir de la violence dans un environnement imaginaire ou une violence non réaliste par rapport à des personnages à figure humaine, alors que les jeux classés PEGI 16 ou 18 contiennent des scènes de violence de plus en plus réalistes.',
        'img' => 'FR-violence.png'
    ]     
];
?>