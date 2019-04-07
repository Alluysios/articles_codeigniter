<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Birds extends CI_Controller {

	
	public function index()
	{
        $data['heading'] = "The Birds of Alberta";
        $data['bird_1'] = "alberta.jpg";
        $data['content_1'] = "Birds, also known as Aves, are a group of endothermic vertebrates, characterised by feathers, toothless beaked jaws, the laying of hard-shelled eggs, a high metabolic rate, a four-chambered heart, and a strong yet lightweight skeleton.[3] Birds live worldwide and range in size from the 5 cm (2 in) bee hummingbird to the 2.75 m (9 ft) ostrich. They rank as the world's most numerically-successful class of tetrapods, with approximately ten thousand living species, more than half of these being passerines, sometimes known as perching birds. Birds have wings which are more or less developed depending on the species; the only known groups without wings are the extinct moa and elephant birds.[4] Wings, which evolved from forelimbs, gave birds the ability to fly, although further evolution has led to the loss of flight in flightless birds, including ratites, penguins, and diverse endemic island species of birds. The digestive and respiratory systems of birds are also uniquely adapted for flight. Some bird species of aquatic environments, particularly seabirds and some waterbirds, have further evolved for swimming.

        The fossil record demonstrates that birds are modern feathered dinosaurs, having evolved from earlier feathered dinosaurs within the theropod group, which are traditionally placed within the saurischian dinosaurs. The closest living relatives of birds are the crocodilians. Primitive bird-like dinosaurs that lie outside class Aves proper, in the broader group Avialae, have been found dating back to the mid-Jurassic period, around 170 million years ago. Many of these early 'stem-birds', such as Archaeopteryx, were not yet capable of fully powered flight, and many retained primitive characteristics like toothy jaws in place of beaks, and long bony tails. DNA-based evidence finds that birds diversified dramatically around the time of the Cretaceous–Palaeogene extinction event 66 million years ago, which killed off the pterosaurs and all the non-avian dinosaur lineages. But birds, especially those in the southern continents, survived this event and then migrated to other parts of the world while diversifying during periods of global cooling. This makes them the sole surviving dinosaurs according to cladistics.
        
        Some birds, especially corvids and parrots, are among the most intelligent animals; several bird species make and use tools, and many social species pass on knowledge across generations, which is considered a form of culture. Many species annually migrate great distances. Birds are social, communicating with visual signals, calls, and bird songs, and participating in such social behaviours as cooperative breeding and hunting, flocking, and mobbing of predators. The vast majority of bird species are socially monogamous (referring to social living arrangement, distinct from genetic monogamy), usually for one breeding season at a time, sometimes for years, but rarely for life. Other species have breeding systems that are polygynous (arrangement of one male with many females) or, rarely, polyandrous (arrangement of one female with many males). Birds produce offspring by laying eggs which are fertilised through sexual reproduction. They are usually laid in a nest and incubated by the parents. Most birds have an extended period of parental care after hatching. Some birds, such as hens, lay eggs even when not fertilised, though unfertilised eggs do not produce offspring.
        
        Many species of birds are economically important as food for human consumption and raw material in manufacturing, with domesticated and undomesticated birds (poultry and game) being important sources of eggs, meat, and feathers. Songbirds, parrots, and other species are popular as pets. Guano (bird excrement) is harvested for use as a fertiliser. Birds prominently figure throughout human culture. About 120–130 species have become extinct due to human activity since the 17th century, and hundreds more before then. Human activity threatens about 1,200 bird species with extinction, though efforts are underway to protect them.[5] Recreational birdwatching is an important part of the ecotourism industry.";

		$this->load->view('includes/header');
		$this->load->view('birds_view', $data);
		$this->load->view('includes/footer');
    }

	public function falcon()
	{
        $data['heading'] = "The Falcon";
        $data['bird_1'] = "falcon.jpg";
        $data['content_1'] = "Falcons are roughly divisible into three or four groups. The first contains the kestrels (probably excepting the American kestrel);[13] usually small and stocky falcons of mainly brown upperside color and sometimes sexually dimorphic; three African species that are generally gray in color stand apart from the typical members of this group. Kestrels feed chiefly on terrestrial vertebrates and invertebrates of appropriate size, such as rodents, reptiles, or insects.

        The second group contains slightly larger (on average) species, the hobbies and relatives. These birds are characterized by considerable amounts of dark slate-gray in their plumage; their malar areas are nearly always black. They feed mainly on smaller birds.
        
        Third are the peregrine falcon and its relatives, variably sized powerful birds that also have a black malar area (except some very light color morphs), and often a black cap, as well. Otherwise, they are somewhat intermediate between the other groups, being chiefly medium gray with some lighter or brownish colors on their upper sides. They are, on average, more delicately patterned than the hobbies and, if the hierofalcons are excluded (see below), this group typically contains species with horizontal barring on their undersides. As opposed to the other groups, where tail color varies much in general but little according to evolutionary relatedness,[note 1] However, the fox and greater kestrels can be told apart at first glance by their tail colors, but not by much else; they might be very close relatives and are probably much closer to each other than the lesser and common kestrels. The tails of the large falcons are quite uniformly dark gray with inconspicuous black banding and small, white tips, though this is probably plesiomorphic. These large Falco species feed on mid-sized birds and terrestrial vertebrates.
        
        Very similar to these, and sometimes included therein, are the four or so species of hierofalcons (literally, hawk-falcons). They represent taxa with, usually, more phaeomelanins, which impart reddish or brown colors, and generally more strongly patterned plumage reminiscent of hawks. Their undersides have a lengthwise pattern of blotches, lines, or arrowhead marks.
        
        While these three or four groups, loosely circumscribed, are an informal arrangement, they probably contain several distinct clades in their entirety.
        
        A study of mtDNA cytochrome b sequence data of some kestrels[13] identified a clade containing the common kestrel and related malar-striped species, to the exclusion of such taxa as the greater kestrel (which lacks a malar stripe), the lesser kestrel (which is very similar to the common, but also has no malar stripe), and the American kestrel, which has a malar stripe, but its color pattern–apart from the brownish back–and also the black feathers behind the ear, which never occur in the true kestrels, are more reminiscent of some hobbies. The malar-striped kestrels apparently split from their relatives in the Gelasian, roughly 2.0–2.5 million years ago (Mya), and are seemingly of tropical East African origin. The entire true kestrel group—excluding the American species—is probably a distinct and quite young clade, as also suggested by their numerous apomorphies.
        
        
        Most members of the genus Falco show a tooth on the upper mandible
        Other studies[14][15][16][17][18] have confirmed that the hierofalcons are a monophyletic group–and that hybridization is quite frequent at least in the larger falcon species. Initial studies of mtDNA cytochrome b sequence data suggested that the hierofalcons are basal among living falcons.[14][15] The discovery of a NUMT proved this earlier theory erroneous.[16] In reality, the hierofalcons are a rather young group, originating at the same time as the start of the main kestrel radiation, about 2 Mya. Very little fossil history exists for this lineage. However, the present diversity of very recent origin suggests that this lineage may have nearly gone extinct in the recent past.[18][19]
        
        The phylogeny and delimitations of the peregrine and hobbies groups are more problematic. Molecular studies have only been conducted on a few species, and the morphologically ambiguous taxa have often been little researched. The morphology of the syrinx, which contributes well to resolving the overall phylogeny of the Falconidae,[20][21] is not very informative in the present genus. Nonetheless, a core group containing the peregrine and Barbary falcons, which, in turn, group with the hierofalcons and the more distant prairie falcon (which was sometimes placed with the hierofalcons, though it is entirely distinct biogeographically), as well as at least most of the typical hobbies, are confirmed to be monophyletic as suspected.[14][15]
        
        Given that the American Falco species of today belong to the peregrine group, or are apparently more basal species, the initially most successful evolutionary radiation seemingly was a Holarctic one that originated possibly around central Eurasia or in (northern) Africa. One or several lineages were present in North America by the Early Pliocene at latest.
        
        The origin of today's major Falco groups—the typical hobbies and kestrels, for example, or the peregrine-hierofalcon complex, or the aplomado falcon lineage—can be quite confidently placed from the Miocene-Pliocene boundary through the Zanclean and Piacenzian and just into the Gelasian, that is from 2.4–8.0 Mya, when the malar-striped kestrels diversified. Some groups of falcons, such as the hierofalcon complex and the peregrine-Barbary superspecies, have only evolved in more recent times; the species of the former seem to be 120,000 years old or so.";

		$this->load->view('includes/header');
		$this->load->view('birds_view', $data);
		$this->load->view('includes/footer');
    }
    
    public function loon()
	{
        $data['heading'] = "The Loon";
        $data['bird_1'] = "loon.jpg";
        $data['content_1'] = "Male and female loons have identical plumage, which is largely patterned black-and-white in summer, with grey on the head and neck in some species. All have a white belly. This resembles many sea-ducks (Merginae) – notably the smaller goldeneyes (Bucephala) – but is distinct from most cormorants, which rarely have white feathers, and if so, usually as large rounded patches rather than delicate patterns. All species of divers have a spear-shaped bill.

        Males are larger on average, but relative size is only apparent when the male and female are together. In winter, plumage is dark grey above, with some indistinct lighter mottling on the wings, and a white chin, throat and underside. The specific species can then be distinguished by certain features, such as the size and colour of the head, neck, back and bill. But reliable identification of wintering divers is often difficult even for experts – particularly as the smaller immature birds look similar to winter-plumage adults, making size an unreliable means of identification.[2]
        
        Gaviiformes are among the few groups of birds in which the young moult into a second coat of down feathers after shedding the first one, rather than growing juvenile feathers with downy tips that wear off, as is typical in many birds. This trait is also found in tubenoses (Procellariiformes) and penguins (Sphenisciformes), both relatives of the loons.[3]";

		$this->load->view('includes/header');
		$this->load->view('birds_view', $data);
		$this->load->view('includes/footer');
    }
    
    public function sparrow()
	{
        $data['heading'] = "The Sparrow";
        $data['bird_1'] = "sparrow.jpg";
        $data['content_1'] = "Sparrow is a species of birds that can be easily recognized because it lives very close to humans. This small bird originates from North Africa, but it has been successfully introduced to North America, Europe, Asia, Australia and New Zealand. Sparrow, unlike many other birds, cannot be found in forests and deserts. It prefers life close to human settlements, including both urban and rural areas. Number of sparrows decreased dramatically in the last couple of years for unknown reason. Three quarters of sparrows disappeared from the London between 1994 and 2000. Due to fast decline in number of sparrows, this bird is listed as threatened (nearly endangered).
        Interesting Sparrow Facts:
        Sparrow is a very small bird. It can reach 4 to 8 inches in length and 0.8 to 1.4 ounces in weight.
        Sparrow has stout body, covered with brown, black and white feathers. Its wings are rounded.
        Males and females can be distinguished by the feather coloration: males have reddish backs and black bib, while females have brown backs with stripes.
        Sparrows are very social and they live in colonies called flocks.
        Sparrows are carnivores (meat-eaters) by nature, but they have changed their eating habits when they learned to live close to people. Sparrows primarily eat moths and other small insects, but they can also eat seed, berries and fruit.
        One of the reasons why sparrows adapted to the life in human settlements is constant supply of food. Sparrows easily learned to eat served food when people started to build bird feeders.
        Sparrows usually fly at the speed of 24 miles per hour. When needed (in the case of danger), they can accelerate to the speed of 31 miles per hour.
        Although sparrows do not belong to the group of water birds, they can swim very fast to escape from the predators.
        Main predators of sparrows are dogs, cats, foxes and snakes. Young and inexperienced birds are the main target and easy meal for these carnivores.
        Sparrows are not territorial animals, but they will aggressively protect their nest from other sparrows.
        Sparrows usually build nest under the roofs, under bridges and in tree hollows.
        Male is responsible for building of the nest. During construction, male will try to attract female. She can help in further building if she is interested in mating.
        Sparrows are allegedly monogamous. Recent genetic analysis showed that only small percent of eggs contains DNA of both parents (in other words: both male and female are prone to infidelity).
        Sparrows have several broods each year. Female lays 3 to 5 eggs. Incubation period lasts 12 to 15 days. Both parents take care of the eggs and chicks. Young birds are ready to leave the nest 15 days after birth.
        Sparrows can survive between 4 and 5 years in the wild.";

		$this->load->view('includes/header');
		$this->load->view('birds_view', $data);
		$this->load->view('includes/footer');
    }
    
    public function owl()
	{
        $data['heading'] = "The Owl";
        $data['bird_1'] = "owl.jpg";
        $data['content_1'] = "Owls possess large, forward-facing eyes and ear-holes, a hawk-like beak, a flat face, and usually a conspicuous circle of feathers, a facial disc, around each eye. The feathers making up this disc can be adjusted to sharply focus sounds from varying distances onto the owls' asymmetrically placed ear cavities. Most birds of prey have eyes on the sides of their heads, but the stereoscopic nature of the owl's forward-facing eyes permits the greater sense of depth perception necessary for low-light hunting. Although owls have binocular vision, their large eyes are fixed in their sockets—as are those of most other birds—so they must turn their entire heads to change views. As owls are farsighted, they are unable to clearly see anything within a few centimeters of their eyes. Caught prey can be felt by owls with the use of filoplumes—hairlike feathers on the beak and feet that act as 'feelers'. Their far vision, particularly in low light, is exceptionally good.

        Owls can rotate their heads and necks as much as 270°. Owls have 14 neck vertebrae compared to seven in humans, which makes their necks more flexible. They also have adaptations to their circulatory systems, permitting rotation without cutting off blood to the brain: the foramina in their vertebrae through which the vertebral arteries pass are about 10 times the diameter of the artery, instead of about the same size as the artery as in humans; the vertebral arteries enter the cervical vertebrae higher than in other birds, giving the vessels some slack, and the carotid arteries unite in a very large anastomosis or junction, the largest of any bird's, preventing blood supply from being cut off while they rotate their necks. Other anastomoses between the carotid and vertebral arteries support this effect.[1][2]
        
        The smallest owl—weighing as little as 31 g (1 oz) and measuring some 13.5 cm (5 in)—is the elf owl (Micrathene whitneyi).[3] Around the same diminutive length, although slightly heavier, are the lesser known long-whiskered owlet (Xenoglaux loweryi) and Tamaulipas pygmy owl (Glaucidium sanchezi).[3] The largest owls are two similarly sized eagle owls; the Eurasian eagle-owl (Bubo bubo) and Blakiston's fish owl (Bubo blakistoni). The largest females of these species are 71 cm (28 in) long, have 54 cm (21 in) long wings, and weigh 4.2 kg (9.3 lb).[3][4][5][6][7]
        
        Different species of owls produce different sounds; this distribution of calls aids owls in finding mates or announcing their presence to potential competitors, and also aids ornithologists and birders in locating these birds and distinguishing species. As noted above, their facial discs help owls to funnel the sound of prey to their ears. In many species, these discs are placed asymmetrically, for better directional location.
        
        Owl plumage is generally cryptic, although several species have facial and head markings, including face masks, ear tufts, and brightly coloured irises. These markings are generally more common in species inhabiting open habitats, and are thought to be used in signaling with other owls in low-light conditions.[8]";

		$this->load->view('includes/header');
		$this->load->view('birds_view', $data);
		$this->load->view('includes/footer');
	}
}
