var gymkhanaUrl = "http://127.0.0.1:8111"

function getTeam(year, teamType){

  var query = `query ($teamType: String!, $year: String!){
    counsellingTeam(teamType: $teamType, year: $year){
      edges{
        node{
          year
          teamType
          studentHeads {
            edges {
              node {
                user {
                  firstName
                  email
                }
                roll
                year
                avatar{
                    sizes{
                        url
                    }
                }
                about
                prog
                hometown
                phone
                branch
                socialLinks{
                  edges{
                    node{
                      socialMedia
                      link
                    }
                  }
                  
                }
              }
            }
          }
          studentAssistantHeads {
              edges {
              node {
                user {
                  firstName
                  email
                }
                roll
                year
                avatar{
                    sizes{
                        url
                    }
                }
                about
                prog
                hometown
                phone
                branch
                socialLinks{
                  edges{
                    node{
                      socialMedia
                      link
                    }
                  }
                  
                }
              }
            }
          }
          studentGuides {
              edges {
              node {
                user {
                  firstName
                  email
                }
                roll
                year
                avatar{
                    sizes{
                        url
                    }
                }
                about
                prog
                hometown
                phone
                branch
                socialLinks{
                  edges{
                    node{
                      socialMedia
                      link
                    }
                  }
                  
                }
              }
            }
          }
        }
      }
    }
  }
  `;

  function addToHtml(persons,id,columnSize=6){
      cards = ''
      for (key in persons){
          card = createCard(persons[key], columnSize)
          cards += card
      }
      el = document.getElementById(id)
      el.innerHTML = cards
  }

  function createCard(details, columnSize) {
      data = details.node
      var card = `
      <div class="col-lg-${columnSize} col-md-${columnSize} mb-r animate-profile invisible">
              <div class="avatar">
                  <img src="images/sqloader.gif" data-src="${data.avatar.sizes[3].url}"
                  class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'">
              </div>
              <h4>${data.user.firstName}</h4>
              <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                      href="https://api.whatsapp.com/send?phone=${data.phone}">+91-${data.phone}</a></h5>
              <h5><strong>Hometown: </strong>${data.hometown}<br><strong>Course: </strong>${data.prog}&nbsp;<strong>Branch: </strong>${data.branch}</h5>
              `

      if (data.about){
          card = card +
              `
              <p>
                  ${data.about}
              </p>
              `
          }
      card = card +
              `
              <a class="icons-sm email-ic" href="mailto:${data.user.email}"><i class="fa fa-envelope-o"></i> </a>
              `
      var sm = {
          'Facebook': {'IC':'fb-ic', 'FA':'fa-facebook'},
          'Twitter': {'IC':'tw-ic', 'FA':'fa-twitter'},
          'LinkedIn': {'IC':'li-ic', 'FA':'fa-linkedin'},
          'Instagram': {'IC':'ins-ic', 'FA':'fa-instagram'},
          'GitHub':{'IC':'git-icfa-github', 'FA':'fa-github'}
      }
      for (linkKey in data.socialLinks.edges){
          var link = data.socialLinks.edges[linkKey]
          var lsm = sm[link.node.socialMedia]
          card = card +
              `
              <a class="icons-sm ${lsm.IC}" target="_blank" href="${link.node.link}"><i class="fa ${lsm.FA}"> </i></a>
              `
      }
      card = card +`
      </div>
      `
      return card
  }

  function striprResponse(data){
      var response = data.data.counsellingTeam.edges[0].node
      var studentGuides = response.studentGuides.edges
      var studentAssistantHeads = response.studentAssistantHeads.edges
      var studentHeads = response.studentHeads.edges
      addToHtml(studentGuides, "student-guide","4")
      addToHtml(studentAssistantHeads, "assistant-head")
      addToHtml(studentHeads, "head")
  }

   fetch(gymkhanaUrl+'/graphql', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'Accept': 'application/json',
    },
    body: JSON.stringify({
      query,
      variables: { teamType, year},
    })
  })
    .then(r => r.json())
    .then(data => striprResponse(data));


  $(document).ready(function() {

      
      
      $(window).scroll( function(){
      
      
      $('.animate-profile').each( function(i){
      
          var bottom_of_object = $(this).position().top;
          var bottom_of_window = $(window).scrollTop() + $(window).height();
      
      
          
          if( bottom_of_window > bottom_of_object ){
      
              $(this).removeClass('invisible');
              $(this).addClass('animated fadeInUp');
          }    else {
                  $(this).addClass('invisible');
                  $(this).removeClass('animated fadeInUp');
                    }
      
      }); 
      }); 
      });

}

function addYear(data){
  var response = data.data.counsellingTeam.edges
  var options = ''
  var years = []
  for (yearKey in response){
    var year = response[yearKey].node.year
    years.push(year.slice(2, year.length))
  }
  years.sort()
  years.reverse()
  for (key in years){
    year = years[key]
    Option = `<option value=" ${year} "> ${year} </option>`
    options += Option 
  }
  var select = document.getElementById('year-select')
  select.innerHTML = options
  getTeam(years[0], teamType);
}
var query =  `query{
  counsellingTeam{
    edges{
      node{
        year
      }
    }
  }
}
`;
  fetch(gymkhanaUrl+'/graphql', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
    'Accept': 'application/json',
  },
  body: JSON.stringify({
    query,
    variables: {}
  })
})
  .then(r => r.json())
  .then(data => addYear(data));


