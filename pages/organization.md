---
layout: archive
title: "Organization"
permalink: /organization/
author_profile: false
---

{% assign groups = site.organization | group_by: "category" %}
{% for group in groups %}
<h2 class="archive__subtitle">{{ group.name }}s</h2>
<div class="grid__wrapper">
{% for organizer in group.items %}
  {% include organization-single.html type="grid" %}
{% endfor %}
</div>
{% endfor %}
