import {
  Badge,
  Group,
  Paper,
  Progress,
  rem,
  Text,
  ThemeIcon,
} from '@mantine/core';
import { IconSwimming } from '@tabler/icons-react';
import { __ } from '@wordpress/i18n';
import classes from './Settings.module.css';

export function Settings() {
  return (
    <Paper radius="md" withBorder className={classes.card} mt={20}>
      <ThemeIcon className={classes.icon} size={60} radius={60}>
        <IconSwimming
          style={{ width: rem(32), height: rem(32) }}
          stroke={1.5}
        />
      </ThemeIcon>

      <Text ta="center" fw={700} className={classes.title}>
        {__('Swimming challenge', 'wp-kirk')}
      </Text>
      <Text c="dimmed" ta="center" fz="sm">
        {__('32 km / week', 'wp-kirk')}
      </Text>

      <Group justify="space-between" mt="xs">
        <Text fz="sm" c="dimmed">
          {__('Progress', 'wp-kirk')}
        </Text>
        <Text fz="sm" c="dimmed">
          62%
        </Text>
      </Group>

      <Progress value={62} mt={5} />

      <Group justify="space-between" mt="md">
        <Text fz="sm">20 / 36 km</Text>
        <Badge size="sm">{__('4 days left', 'wp-kirk')}</Badge>
      </Group>
    </Paper>
  );
}
