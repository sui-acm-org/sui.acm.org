---
layout: archive
title: "Organization"
permalink: /organization/
author_profile: false
---
Most chairs and all the committees are TBA.

{% assign groups = site.organization | group_by: "category" | sort: "title" %}
{% for group in groups %}
<h2>{{ group.name }}s</h2>
<div class="grid__wrapper">
{% for organizer in group.items %}
  {% include organization-single.html %}
{% endfor %}
</div>
{% endfor %}
