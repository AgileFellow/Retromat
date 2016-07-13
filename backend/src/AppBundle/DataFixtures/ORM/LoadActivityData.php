<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Activity;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadActivityData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $activity = new Activity();
        $activity->setRetromatId(123);
        $activity->setLanguage('en');
        $activity->setPhase(1);
        $activity->setName('Find your Focus Principle');
        $activity->setSummary('Discuss the 12 agile principles and pick one to work on');
        $activity->setDesc(
            'Print the <a href=\'http://www.agilemanifesto.org/principles.html\'>principles of the Agile Manifesto</a> \
onto cards, one principle \
per card. If the group is large, split it and provide each smaller group with \
their own set of the principles. \
<br><br> \
Explain that you want to order the principles according to the following question: \
\'How much do we need to improve regarding this principle?\'. In the end the \
principle that is the team\'s weakest spot should be on top of the list. \
<br><br> \
Start with a random principle, discuss what it means and how much need for \
improvement you see, then place it in the middle. \
Pick the next principle, discuss what it means and sort it relatively to the other \
principles. You can propose a position depending on the previous discussion and \
move from there by comparison. \
Repeat this until all cards are sorted. \
<br><br> \
Now consider the card on top: This is presumeably the most needed and most urgent \
principle you should work on. How does the team feel about it? Does everyone still \
agree? What are the reasons there is the biggest demand for change here? Should you \
compare to the second or third most important issue again? If someone would now \
rather choose the second position, why?'
        );
        $activity->setSource('"<a href=\'http://www.agilesproduktmanagement.de/\'>Tobias Baier</a>"');
        $activity->setMore('Find your Focus Principle');
        $activity->setDuration('long');
        $activity->setSuitable('iteration, project, release');

        $manager->persist($activity);
        $manager->flush();
    }
}