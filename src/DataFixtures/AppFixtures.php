<?php

namespace App\DataFixtures;

use App\Entity\Author;
use App\Entity\Comment;
use App\Entity\Post;
use App\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $author1 = new Author();
        $author1
            ->setFullname('John')
            ->setEmail('john.doe@gmail.com')
        ;
        $manager->persist($author1);

        $post1 = new Post();
        $post1
            ->setAuthor($author1)
            ->setTitle('First post')
            ->setBody('Here is the body')
            ->setCreatedAt(new \DateTime())
        ;
        $manager->persist($post1);

        $comment1 = new Comment();
        $comment1
            ->setPost($post1)
            ->setBody('First comment about post #1')
            ->setAuthor('Dark Vador')
            ->setCreatedAt(new \DateTime())
        ;
        $manager->persist($comment1);

        $post2 = new Post();
        $post2
            ->setAuthor($author1)
            ->setTitle('Second post')
            ->setBody('Here is another body')
            ->setCreatedAt(new \DateTime())
        ;
        $manager->persist($post2);

        $author2 = new Author();
        $author2
            ->setFullname('Chuck Norris')
            ->setEmail('chuck.norris@gmail.com')
        ;
        $manager->persist($author2);

        $post3 = new Post();
        $post3
            ->setAuthor($author2)
            ->setTitle('Second post')
            ->setBody('Here is another body')
            ->setCreatedAt(new \DateTime())
        ;
        $manager->persist($post3);

        $comment2 = new Comment();
        $comment2
            ->setPost($post3)
            ->setBody('First comment about post #3')
            ->setAuthor('Yoshi')
            ->setCreatedAt(new \DateTime())
        ;
        $manager->persist($comment2);

        $comment3 = new Comment();
        $comment3
            ->setPost($post3)
            ->setBody('Second comment about post #3')
            ->setAuthor('Mario')
            ->setCreatedAt(new \DateTime())
        ;
        $manager->persist($comment3);

        $manager->flush();

        $author1->setFullname('John Doe');
        $manager->persist($author1);

        $author3 = new Author();
        $author3
            ->setFullname('Luke Slywalker')
            ->setEmail('luck.skywalker@gmail.com')
        ;
        $manager->persist($author3);

        $post4 = new Post();
        $post4
            ->setAuthor($author3)
            ->setTitle('First post')
            ->setBody('Here is the body')
            ->setCreatedAt(new \DateTime())
        ;
        $manager->persist($post4);

        $tag1 = new Tag();
        $tag1->setTitle('techno');
        $manager->persist($tag1);

        $tag2 = new Tag();
        $tag2->setTitle('house');
        $manager->persist($tag2);

        $tag3 = new Tag();
        $tag3->setTitle('hardcore');
        $manager->persist($tag3);

        $tag4 = new Tag();
        $tag4->setTitle('jungle');
        $manager->persist($tag4);

        $tag5 = new Tag();
        $tag5->setTitle('gabber');
        $manager->persist($tag5);

        $manager->flush();

        $post1
            ->addTag($tag1)
            ->addTag($tag2)
        ;
        $post3
            ->addTag($tag1)
            ->addTag($tag3)
            ->addTag($tag5)
        ;
        $post4
            ->addTag($tag2)
            ->addTag($tag4)
            ->addTag($tag5)
        ;

        $manager->flush();

        $post4
            ->removeTag($tag4)
            ->removeTag($tag5)
        ;
        $manager->flush();

        $author3->removePost($post4);
        $manager->flush();

        $manager->remove($author3);

        $manager->flush();
    }
}
