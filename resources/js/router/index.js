import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)


import home from '../pages/home.vue'
import about from '../pages/about.vue'
import registration from '../pages/registration.vue'
import login from '../pages/login.vue'
import all_template from '../pages/all_template.vue'
import change_password from '../pages/change_password.vue'
import cover_image from '../pages/cover_image.vue'

import add_member from '../pages/add_member.vue'
import download_request from '../pages/download_request.vue'
import product_changelog from '../pages/product_changelog.vue'
import product_description from '../pages/product_description.vue'
import product_review from '../pages/product_review.vue'
import publish_project from '../pages/publish_project.vue'
import team_profile from '../pages/team_profile.vue'
import upload_project from '../pages/upload_project.vue'
import website from '../pages/website.vue'
import apps from '../pages/apps.vue'
import games from '../pages/games.vue'
import allrequest from '../pages/allrequest.vue'
import myProject from '../pages/myProject.vue'







let Admin = ['Admin'];


export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'home',
      component: home,
      meta: {
         // guest: true,
         // allowedUserType: ['All'],
          title: 'Home',
      }

    },
    {
      path: '/website',
      name: 'website',
      component: website,
      meta: {
         // guest: true,
         // allowedUserType: ['All'],
          title: 'website',
      }

    },
    {
      path: '/games',
      name: 'games',
      component: games,
      meta: {
         // guest: true,
         // allowedUserType: ['All'],
          title: 'games',
      }

    },
    {
      path: '/apps',
      name: 'apps',
      component: apps,
      meta: {
         // guest: true,
         // allowedUserType: ['All'],
          title: 'apps',
      }

    },
    {
      path: '/product-changelog',
      name: 'product_changelog',
      component: product_changelog,
      meta: {
         // guest: true,
         // allowedUserType: ['All'],
          title: 'product_changelog',
      }

    },
    {
      path: '/upload-project',
      name: 'upload_project',
      component: upload_project,
      meta: {
         // guest: true,
         // allowedUserType: ['All'],
          title: 'upload_project',
      }

    },
    {
      path: '/publish-project',
      name: 'publish_project',
      component: publish_project,
      meta: {
         // guest: true,
         // allowedUserType: ['All'],
          title: 'publish_project',
      }

    },
    {
      path: '/team-profile',
      name: 'team_profile',
      component: team_profile,
      meta: {
         // guest: true,
         // allowedUserType: ['All'],
          title: 'team_profile',
      }

    },
    {
      path: '/product-review',
      name: 'product_review',
      component: product_review,
      meta: {
         // guest: true,
         // allowedUserType: ['All'],
          title: 'product_review',
      }

    },
   
    {
        path: '/about',
        name: 'about',
        component: about,
        meta: {
           // guest: true,
           // allowedUserType: ['All'],
            title: 'About',
        }
  
      },
    {
        path: '/all-template',
        name: 'all_template',
        component: all_template,
        meta: {
           // guest: true,
           // allowedUserType: ['All'],
            title: 'all_template',
        }
  
      },
    {
        path: '/cover-image',
        name: 'cover_image',
        component: cover_image,
        meta: {
           // guest: true,
           // allowedUserType: ['All'],
            title: 'cover_image',
        }
  
      },
    {
        path: '/change-password',
        name: 'change_password',
        component: change_password,
        meta: {
           // guest: true,
           // allowedUserType: ['All'],
            title: 'change_password',
        }
  
      },
    {
        path: '/product-description/:id',
        name: 'product_description',
        component: product_description,
        meta: {
           // guest: true,
           // allowedUserType: ['All'],
            title: 'product_description',
        }
  
      },
    {
        path: '/registration',
        name: 'registration',
        component: registration,
        meta: {
           // guest: true,
           // allowedUserType: ['All'],
            title: 'Projcet-Rakho Account',
        }
  
      },
    
  
    {
        path: '/add-member',
        name: 'add_member',
        component: add_member,
        meta: {
           // guest: true,
           // allowedUserType: ['All'],
            title: 'Project Rakho Add Member',
        }
  
      },
    {
        path: '/download-request/:id',
        name: 'download_request',
        component: download_request,
        meta: {
           // guest: true,
           // allowedUserType: ['All'],
            title: 'Project Rakho Download Request',
        }
  
      },
    {
        path: '/login',
        name: 'login',
        component: login,
        meta: {
           // guest: true,
           // allowedUserType: ['All'],
            title: 'Project Rakho Login',
        }
  
      },
    {
        path: '/allrequest',
        name: 'allrequest',
        component: allrequest,
        meta: {
           // guest: true,
           // allowedUserType: ['All'],
            title: 'Project Rakho allrequest',
        }
  
      },
    {
        path: '/myProject',
        name: 'myProject',
        component: myProject,
        meta: {
           // guest: true,
           // allowedUserType: ['All'],
            title: 'Project Rakho myProject',
        }
  
      },

  ],

});