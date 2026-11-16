# Program Scheduling (Drupal module)

An early skeleton of a Drupal 10 module for TV program schedules.

## Status

This is a starting point, not a finished module:

- Hooks are wired for a `schedule` entity type (insert, update, cron, permissions, Views data), but the module does not define that entity itself — it expects one to exist.
- `ScheduleManager::checkConflicts()` is a stub and always returns `false`.
- There is no EPG import or export yet.

## What is here

| File | Purpose |
| --- | --- |
| `program_scheduling.info.yml` | Module definition (Drupal ^10, depends on Views and Field) |
| `program_scheduling.module` | Hooks: help, entity insert/update, cron, form alter, permission, theme, Views data |
| `program_scheduling.services.yml` | Registers `program_scheduling.schedule_manager` |
| `src/Service/ScheduleManager.php` | Conflict check (stub), notifications, logging |
| `templates/program-scheduling-calendar.html.twig` | Minimal calendar list used by `program_scheduling_render_calendar()` |

## Install

```bash
cd web/modules/custom
git clone https://github.com/stukenov/drupal-program-scheduling.git program_scheduling
drush en program_scheduling
```

## License

MIT — see [LICENSE](LICENSE).
